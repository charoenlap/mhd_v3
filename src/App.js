import React from "react";
import "./App.css";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Login from "./Components/Member/Login";
import Register from "./Components/Member/Register";

import Home from "./Components/Home";

class App extends React.Component {
  render() {
    return (
      <Router>
        <Switch>
          <Route path="/" exact component={Login}>
            <Login />
          </Route>
          <Route path="/login" component={Login}>
            <Login />
          </Route>
          <Route path="/register" component={Register}>
            <Register />
          </Route>
          <Route path="/home" component={Home}>
            <Home />
          </Route>
        </Switch>
      </Router>
    );
  }
}

export default App;
