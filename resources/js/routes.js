import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'
import Colors from './components/Colors'
import Illustrations from './components/Illustrations'
import LoadersAndAnimations from './components/LoadersAndAnimations'
import Mascot from './components/Mascot'
import Typography from './components/Typography'
import Wallpapers from './components/Wallpapers'
import Cours from './components/Cours'
import NotFound from './components/NotFound'

export default{

    mode: 'history',
    linkActiveClass: "font-weight-bold h5",
    
    routes:[
        {path: '*', component: NotFound},

        {path: '/', component: Logo},

        {path: '/logo', component: Logo},
        {path: '/logo-symbol', component: LogoSymbol},
        {path: '/colors', component: Colors},

        {path: '/illustrations', component: Illustrations},
        {path: '/loaders-and-animations', component: LoadersAndAnimations},
        {path: '/mascot', component: Mascot},

        {path: '/typography', component: Typography},
        {path: '/wallpapers', component: Wallpapers},
        {path: '/cours', component: Cours},
    ]
};