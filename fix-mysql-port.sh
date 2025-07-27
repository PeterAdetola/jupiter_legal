#!/bin/bash

# Starting port to check
PORT=3306

# Check if a port is in use
is_port_in_use() {
  lsof -iTCP:$1 -sTCP:LISTEN -t >/dev/null 2>&1
}

# Find first available port
while is_port_in_use $PORT; do
  PORT=$((PORT + 1))
done

echo "✅ Found available port: $PORT"

# Update docker-compose.yml
if grep -q "ports:" docker-compose.yml; then
  sed -i.bak -E "s/['\"]?3306['\"]?:['\"]?3306['\"]?/\"$PORT:3306\"/" docker-compose.yml
else
  echo "❌ Could not find ports section in docker-compose.yml"
  exit 1
fi

# Update .env
if [ -f .env ]; then
  sed -i.bak "s/^DB_PORT=.*/DB_PORT=$PORT/" .env
  echo "✅ Updated .env DB_PORT to $PORT"
else
  echo "❌ .env file not found."
  exit 1
fi

# Restart Sail
./vendor/bin/sail down
./vendor/bin/sail up -d

echo "🚀 Done! MySQL now runs on host port $PORT"
