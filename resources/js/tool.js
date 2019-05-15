Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'nova-telescope',
            path: '/nova-telescope',
            component: require('./components/Tool'),
        },
    ])
})
