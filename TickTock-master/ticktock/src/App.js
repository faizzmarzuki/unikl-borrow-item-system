import React, { Component } from "react";
import Stopwatch from "./Stopwatch";
import Countdown from "./Countdown";
class App extends Component {
  render() {
    return (
      <div className="App">
        <div className="App-title">TickTock</div>

        <br></br>
        
        <div className="Timers">
          <Stopwatch />

          <br></br>

          <Countdown />
        </div>
      </div>
    );
  }
}
export default App;