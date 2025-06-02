export default {
    server: {
        host: '0.0.0.0',
        port: 5173,
        watch: {
            usePolling: true,
            interval: 1000
        },
        hmr: {
            port: 5173
        }
    }
}