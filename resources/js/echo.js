import Echo from 'laravel-echo';

import Pusher from 'pusher-js';

window.Pusher = Pusher;
const configs = {
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
};
console.log('configs:::',configs);
window.Echo = new Echo(configs);
console.log("After ECHO::::");
