## render()

method to make HTML code appear onscreen

- In React HTML code is written in `render()`, whereas in Vue `<template></template>`?

## propsとstate

- props : value that is passed from outside of a component
- state : value that is manipulated in a component
    - to set state, use `setState` method provided in React

## redux

similar to vuex

## react-router

similar to vue-router

## Nested-JSX

``` js

 const theExample = (
   <a href="https://www.example.com">
     <h1>
       Click me!
     </h1>
   </a>
 );

```

## render simply

``` js

import React from 'react';
import ReactDOM from 'react-dom';
ReactDOM.render(<h1>Hello world</h1>, document.getElementById('app'));

```

## conditional

use `&& operator`

``` js

const tasty = (
  <ul>
    <li>Applesauce</li>
    { !baby && <li>Pizza</li> }
    { age > 15 && <li>Brussels Sprouts</li> }
    { age > 20 && <li>Oysters</li> }
    { age > 25 && <li>Grappa</li> }
  </ul>
);

```

## .map()

```js

const strings = ['Home', 'Shop', 'About Me'];
const listItems = strings.map(string => <li>{string}</li>);
<ul>{listItems}</ul>

```

## key

key is needed like vue-for

``` js

const people = ['Rowe', 'Prevost', 'Gare'];
const peopleLis = people.map((person, i) =>
  // expression goes here:
<li key={`person-0${i}`}>{person}</li>
);

```

## React.createElement

https://reactjs.org/docs/react-api.html#createelement

```js
const h1 = <h1>Hello world</h1>;
```

↑ equal to ↓

```js
const h1 = React.createElement(
  "h1",
  null, // Object which is handled as propertyies
  "Hello world"
);
```

# React.Component

``` js

import React from "react"
import ReactDOM from "react-dom"

class MyComponentClass extends React.Component {
  render() { return <h1>Hello World</h1> }
}

ReactDOM.render(
  <MyComponentClass />,
  document.getElementById('app')
);

```

## summary so far 

```js
class Owl extends React.Component {
  render() {
    const owl = {
      title: 'Excellent Owl',
      src: 'https://content.codecademy.com/courses/React/react_photo-owl.jpg'
    };

    return (
      <div>
      <h1>{owl.title}</h1>
      <img src={owl.src} alt={owl.title} />
      </div>
      )
  }
};

ReactDOM.render(<Owl />, document.getElementById('app'));
```

## Props

```js

import React from 'react';
import ReactDOM from 'react-dom';

class Greeting extends React.Component {
  render() {
    return <h1>Hi there, {this.props.firstName}.</h1>;
  }
}

ReactDOM.render(
  <Greeting firstName='Takahiro' />, 
  document.getElementById('app')
);

// Hi there, Takahiro.

```

## Props.childrem

```js

import React from 'react';
import ReactDOM from 'react-dom';
import { List } from './List';

class App extends React.Component {
  render() {
    return (
      <div>
        <List type='Tennis Player'>
          <li>Stan Wawrinka</li>
          <li>Roger Federer</li>
        </List>
        <List type='Tennis Player'>
          <li>Erling Haaland</li>
        </List>
      </div>
    );
  }
}

```

```js

import React from 'react';

export class List extends React.Component {
  render() {
    let titleText = `Favorite ${this.props.type}`;
    if (this.props.children instanceof Array) {
    	titleText += 's';
    }
    return (
      <div>
        <h1>{titleText}</h1>
        <ul>
        {this.props.children}
        </ul>
      </div>
    );
  }
}

// default value
List.defaultProps = {
  type: 'Player'
}

```

## State

this.setState Automatically Calls render

``` js

import React from 'react';
import ReactDOM from 'react-dom';

const green = '#39D1B4';
const yellow = '#FFD712';

class ChangeColor extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            color: green
        }

        this.changeColor = this.changeColor.bind(this);
    }
    changeColor() {
        const newColor = this.state.color === green ? yellow : green;
        this.setState({ color: newColor });
    }
    render() {
        return (
            <div style={{ background: this.state.color }}>
                <h1>
                    Change my color
                </h1>
                <button onClick={this.changeColor}>
                    Change color
                </button>
            </div>
        );
    }
}
ReactDOM.render(<ChangeColor />, document.getElementById("app"))

```

## componentDidMount()

`componentDidMount()` is the final method called during the mounting phase.

## componentWillUnmount()

`componentWillUnmount()` is called in the unmounting phase, right before the component is completely destroyed.

## componentDidUpdate()

`componentDidUpdate()`