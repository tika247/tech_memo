# Destructuring Objects

``` js
const person = {
  name: 'Paul Knulst',
  role: 'Tech Lead',
  address: {
    street: 'Blogstreet',
    city: 'Anytown',
    country: 'Germany'
  }
};

const {name, role, address: {city, ...address}} = person;

console.log(name); // Output: Paul Knulst
console.log(role); // Output: Tech Lead
console.log(city); // Output: Anytown
console.log(address);
```

## default

``` js
const person = {
  name: 'Paul Knulst',
  role: 'Tech Lead'
};

const {name, role, address = 'Unknown'} = person;

console.log(name); // Output: Paul Knulst
console.log(role); // Output: Tech Lead
console.log(address); // Output: Unknown
```