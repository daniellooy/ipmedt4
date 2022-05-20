import { createBrowserHistory } from 'history'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import Login from './Auth/Login';
import NotFound from './NotFound';
import Home from './Home/Home';
import CreateItem from './CreateItem/CreateItem';

import NavBar from './Layout/NavBar';

const App = () => {
  return (
    <Router>
      {/* navigatie */}
      <NavBar/>

      {/* de verschillende paginas er onder */}
      <Routes history={createBrowserHistory}>
        <Route exact path="/" element={<Home />} />
        <Route path="/login" element={<Login />} />
        <Route path="/createitem" element={<CreateItem />} />

        {/* Als path niet bestaat, ga naar not found */}
        <Route path="*" exact={true} element={<NotFound />} />
      </Routes>
    </Router>
  );
}

export default App;