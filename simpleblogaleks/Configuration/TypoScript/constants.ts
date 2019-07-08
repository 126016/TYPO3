
plugin.tx_simpleblogaleks_bloglisting {
    view {
        # cat=plugin.tx_simpleblogaleks_bloglisting/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:simpleblogaleks/Resources/Private/Templates/
        # cat=plugin.tx_simpleblogaleks_bloglisting/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:simpleblogaleks/Resources/Private/Partials/
        # cat=plugin.tx_simpleblogaleks_bloglisting/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:simpleblogaleks/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_simpleblogaleks_bloglisting//a; type=string; label=Default storage PID
        storagePid =
    }
}
