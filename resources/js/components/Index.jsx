import React, { Component } from 'react'

import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';

import ReactDOM from 'react-dom'
import Home from './Pages/Home'
import HarvestData from './Pages/HarvestData'
import HarvestAMS from './Pages/HarvestAMS'
import HarvestCRM from './Pages/HarvestCRM'
import HarvestPay from './Pages/HarvestPay'
import HarvestEMIS from './Pages/HarvestEMIS'

import { Scrollbars } from 'react-custom-scrollbars';

class Index extends Component {

    render () {
        return (
            <div className='Index'>
                <Router>
                    <Switch>
                        <Route exact path='/' component={Home} />
                        {/* <Route path='/products/harvestdata'>
                            <HarvestData/>
                        </Route> */}
                        {/* <Route path='/products/harvestams'>
                            <HarvestAMS/>
                        </Route>
                        <Route path='/products/harvestcrm'>
                            <HarvestCRM/>
                        </Route>
                        <Route path='/products/harvestpay'>
                            <HarvestPay/>
                        </Route>
                        <Route path='/products/harvestemis'>
                            <HarvestEMIS/>
                        </Route> */}
                    </Switch>
                </Router>
            </div>
        )
    }
    
}

export default Index;

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}