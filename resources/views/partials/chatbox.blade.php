

<!-- Chatbot Overlay Container -->
<div id="chatbot-overlay" class="fixed inset-0 z-50 flex justify-end items-end pointer-events-none">
    <!-- Chatbot Widget -->
    <div id="chatbot-widget" class="w-[80%] md:w-[40%] lg:w-[25%] max-h-[80vh] bg-white dark:bg-gray-800 rounded-xl shadow-lg flex flex-col overflow-hidden border border-gray-200 dark:border-gray-700 m-4 pointer-events-auto hidden">
        <!-- Header -->
        <div class="bg-gray-100 dark:bg-gray-700 p-4 flex items-center justify-between">
            <h2 class="text-gray-900 dark:text-white font-semibold text-lg">AI Chatbot</h2>
            <button id="chat-close" class="text-gray-500 dark:text-gray-300 hover:text-red-500">✕</button>
        </div>

        <!-- Chat Body -->
        <div id="chat-messages" class="flex-1 p-4 space-y-4 overflow-y-auto bg-white dark:bg-gray-900 scroll-smooth">
            <div class="flex items-start gap-2.5 animate-fade-in">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bot Image">
                <div class="flex flex-col gap-1 w-full max-w-[320px]">
                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                        <span class="text-sm font-semibold text-gray-900 dark:text-white">Bot</span>
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Now</span>
                    </div>
                    <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                        <p class="text-sm font-normal text-gray-900 dark:text-white">Hi! How can I help you today?</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Input -->
        <form id="chat-form" class="p-4 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 flex items-center gap-2">
            <input id="chat-input" type="text" placeholder="Type a message..." class="flex-1 p-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-200">Send</button>
        </form>
    </div>
</div>

<!-- Subtle Animation -->
<style>
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fade-in 0.3s ease-in-out;
    }
</style>

<!-- Script -->
<script>
    const toggleButton = document.getElementById('chat-toggle');
    const chatWidget = document.getElementById('chatbot-widget');
    const overlay = document.getElementById('chatbot-overlay');
    const closeButton = document.getElementById('chat-close');

    toggleButton.addEventListener('click', () => {
        chatWidget.classList.toggle('hidden');
    });

    closeButton.addEventListener('click', () => {
        chatWidget.classList.add('hidden');
    });

    // Close when clicking outside the widget
    document.addEventListener('click', function (event) {
        const isClickInside = chatWidget.contains(event.target) || toggleButton.contains(event.target);
        if (!isClickInside) {
            chatWidget.classList.add('hidden');
        }
    });

    // Message send logic
    document.getElementById('chat-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const input = document.getElementById('chat-input');
        const message = input.value.trim();
        if (message === '') return;

        const container = document.createElement('div');
        container.className = 'flex items-start justify-end gap-2.5 animate-fade-in';
        container.innerHTML = `
    <div class="flex flex-col gap-1 w-full max-w-[320px] text-right">
      <div class="flex items-center justify-end space-x-2 rtl:space-x-reverse">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Now</span>
        <span class="text-sm font-semibold text-gray-900 dark:text-white">You</span>
      </div>
      <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-blue-100 rounded-s-xl rounded-ee-xl dark:bg-blue-600 text-left">
        <p class="text-sm font-normal text-gray-900 dark:text-white">${message}</p>
      </div>
    </div>
    <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=You" alt="You">
  `;
        document.getElementById('chat-messages').appendChild(container);
        input.value = '';
        input.focus();

        setTimeout(() => {
            document.getElementById('chat-messages').scrollTop = document.getElementById('chat-messages').scrollHeight;
        }, 100);

        setTimeout(() => {
            const reply = document.createElement('div');
            reply.className = 'flex items-start gap-2.5 animate-fade-in';
            reply.innerHTML = `
      <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bot Image">
      <div class="flex flex-col gap-1 w-full max-w-[320px]">
        <div class="flex items-center space-x-2 rtl:space-x-reverse">
          <span class="text-sm font-semibold text-gray-900 dark:text-white">Bot</span>
          <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Now</span>
        </div>
        <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
          <p class="text-sm font-normal text-gray-900 dark:text-white">That's interesting! Tell me more.</p>
        </div>
      </div>
    `;
            document.getElementById('chat-messages').appendChild(reply);
            document.getElementById('chat-messages').scrollTop = document.getElementById('chat-messages').scrollHeight;
        }, 1000);
    });
</script>
