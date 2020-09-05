import React from "react";
import "./App.css";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Login from "./Componants/Member/Login";
import Register from "./Componants/Member/Register";

import Home from "./Componants/Home";

class App extends React.Component {
  render() {
    return (
      <Router>
        <Switch>
          <Route path="/">
            <Login />
          </Route>
          <Route path="/login">
            <Login />
          </Route>
          <Route path="/register">
            <Register />
          </Route>
          <Route path="/home" componants={Home}>
            <Home />
          </Route>
        </Switch>
      </Router>
    );
  }
}

export default App;
