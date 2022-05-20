import { Link } from 'react-router-dom';

import classes from './NavBar.module.css';

const NavBar = () => {
  return (
      <nav className={classes.navBar}>
        <div>
          <div>
          </div>
          <ul className={classes.navBar__links}>
            <Link className={classes.navBar__link} to="/"><li>Home</li></Link>
            <Link className={classes.navBar__link} to="/login"><li>Login</li></Link>
            <Link className={classes.navBar__link} to="/createitem"><li>Create item</li></Link>
            <Link className={classes.navBar__link} to="/asdfwaef"><li>Notfound</li></Link>
          </ul>
        </div>
    </nav>
  )
}

export default NavBar;