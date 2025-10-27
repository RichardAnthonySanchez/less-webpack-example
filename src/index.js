import "./styles/index.less";
import "./icons.js";
import "./components/header.js";

if (process.env.NODE_ENV !== "production") {
  console.log("Looks like we are in development mode!");
}

function component() {
  // do stuff
}

document.body.appendChild(component());
