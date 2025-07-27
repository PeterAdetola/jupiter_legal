<style>
    #toast {
        position: fixed;
        bottom: 20px;
        right: 20px;
        max-width: 300px;
        display: flex;
        align-items: center;
        padding: 16px;
        background-color: #ffffff;
        color: #333;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        font-size: 14px;
        z-index: 9999;
        border-left: 5px solid #d4af36;
        opacity: 1;
        animation: fadein 0.5s ease, fadeout 0.5s ease 4.5s forwards;
    }

    .toast-icon {
        width: 20px;
        height: 20px;
        color: #d4af36;
        margin-right: 12px;
        transform: rotate(45deg);
        flex-shrink: 0;
    }

    .toast-message {
        flex: 1;
    }

    @keyframes fadein {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeout {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(20px); display: none; }
    }
</style>

<div id="toast">
    <svg class="toast-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9" />
    </svg>
    <div class="toast-message">{{ session('success') }}</div>
</div>
