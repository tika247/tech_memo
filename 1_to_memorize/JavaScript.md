## square brackets

``` js
[]
```

## back-quote allow us to line break

``` js
const guestList = `■Guests
 ・John
 ・Pete
 ・Mary
`;

/*
* ■Guests
* ・John
* ・Pete
* ・Mary
*/
```

## NodeListOf vs HTMLCollection

- NodeList
    - static → items are never changed even if elements are added or removed withn that NodeList
- HTMLCollection
    - dynamic → items are reflected in response to addition or removal 

## str.prototype.startsWith 

``` js
alert( "Widget".startsWith("Wid") ); // true
```

## str.prototype..startsWith 

``` js
alert( "Widget".endsWith("get") );   // true
```

## Array.prototype.at()

* from Safari 15.4

``` js
const languages = ['Japanese', 'English', 'Spanish', 'Russian']
console.log(languages.at(-1)); // 'Russian' - return the last value
```

## console.time()

good for performance

``` js

console.time("test");
setTimeout(() => {
    console.timeEnd("test");
}, 1000);

```

## console.trace()

good for debug

``` js 

console.trace();

```

## Array destructuring

``` js 

// we have an array with the name and surname
let arr = ["John", "Smith"]

// destructuring assignment
// sets firstName = arr[0]
// and surname = arr[1]
let [firstName, surname] = arr;

alert(firstName); // John
alert(surname);  // Smith

```

## Promise.all

if some functions or process don't depend on each other, consider `Promise.all` rather than put `await`

ex)

``` js 

const getData = async = () => {
    const userDataResponse = () => {
        return fetch('https://apiapiapiapiapiapiapi-user');
    }
    const productDataResponse = () => {
        return fetch('https://apiapiapiapiapiapiapi-product');
    }

    const [userData, productData] = await Promise.all([userDataResponse(), productDataResponse()]);

    return {userData, productData}
}

```

## String to a number

``` js

my_string = "123";
console.log(+my_string);
// 123

my_string = "amazing";
console.log(+my_string);
// NaN

```

## A number to a string

``` js

let converted_number = 5 + "";
console.log(converted_number);
// 5

console.log(typeof converted_number); 
// string

```

## Get unique values

``` js

let array_values = [1, 3, 3, 4, 5, 6, 6, 6, 8, 4, 1]
let unique_values = [...new Set(array_values )];
console.log(unique_values );
// [1,3, 4, 5, 6, 8]

``` 

## Replace all

``` js

let replace_string = "Visit stunnitysoft. stunnitysoft is a software company";
console.log(replace_string.replace(/stunnity/, "Micro")); 
// "Visit Microsoft. stunnitysoft is a software company"
console.log(replace_string.replace(/stunnity/g, "Micro")); 
// "Visit Microsoft. Microsoft is a software company"

```

## Using length to resize and emptying an array

``` js

let array_values= [1, 2, 3, 4, 5, 6, 7, 8];  
console.log(array_values.length); 
// 8  
array_values.length = 5;  
console.log(array_values.length); 
// 5  
console.log(array_values); 
// [1, 2, 3, 4,5]

```

## globalThis

https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/globalThis

## Proxy & Reflect 

https://reffect.co.jp/html/javascript-proxy-how-to

## Nullish coalescing operator (??)

a logical operator that returns its right-hand side operand 
when its left-hand side operand is null or undefined, 
and otherwise returns its left-hand side operand

``` js

const foo = null ?? 'default string';
console.log(foo);
// expected output: "default string"

```

https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Nullish_coalescing_operator

## private instanace field

``` js

class ClassWithPrivateField {
  #privateStaticMethod() {
    return 'hello world';
  }
}

```

## console.trace

``` js 

function foo() {
  function bar() {
    console.trace();
  }
  bar();
}

foo();

// log below
// bar
// foo

```

## Number separator

``` js

const largeNumber = 1_000_000_000;
console.log(largeNumber); // 1000000000

```

## console.log Variable wrapper

``` js

const name = "Maxwell";
console.log({ name });

```

## Write conditional judgment statements in short

``` js

// Common writing method
if (condition) {
    doSomething();
}

// Abbreviations
condition && doSomething(); 

```

## Filter all dummy values from the array

```js 

const myArray = [1, undefined, NaN, 2, null, '@maxwell', true, 5, false];
console.log(myArray.filter(Boolean)); // [1, 2, "@maxwell", true, 5]

```

## EventTargetaddEventListener(type, listener, {passive: true});

`{passive: true}` means that the listener has no `e.preventDefault`.
If the listener has `e.preventDefault`, warn in console.

## Tab move

■forward

``` js
if (e.keyCode === 9 && !e.shiftKey) {
}
```

■backward

``` js
if (e.keyCode === 9 && e.shiftKey) {
}
```

## Use Map() if Objects frequently be changed or add or remove because much faster than {}

https://www.builder.io/blog/maps#performance-issues-with-objects

- fast and good for performance
- prevent a pair of key and value from duplication
- 

## Use structuredClone() to copy structured-cloneable-type deeply

``` js

const original = {
  a: "aaa",
  b: "bbb",
}

const copied = structuredClone(original);

console.log(original === copied); // false

```

## DocumentFragment

- possible to add a arbitrary number of node into this fragment document and add it into DOM at once.
- DOM is not updated by changing, adding or deleting nodes in fragment so optimize performance

``` js
const fragment = document.createDocumentFragment();
```

## ShadowDOM

- possible to create a new and independent DOM (this is ShadowDOM) which is branch off from main DOM
- that ShadowDOM does not allow to access or see that structure from outside 

``` js
Element.attachShadow();
```

## Document.body

``` js
const body = document.body;
console.log(body);
```

## Custom Elements

https://sbfl.net/blog/2016/09/01/custom-elements-v1/

``` js
customElements.define()
```

## replace element

■replaceWith()
https://developer.mozilla.org/en-US/docs/Web/API/Element/replaceWith

■replaceChild()
https://developer.mozilla.org/en-US/docs/Web/API/Node/replaceChild