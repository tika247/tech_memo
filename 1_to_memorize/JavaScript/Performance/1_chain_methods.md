## Chain methods

### Bad Sample

use `map()` each time and make an individual variable
More variables make more consumption of memory

``` js

const mappedArr = data.map((entity) => {
  return {
    ...entity,
    walkingOnTwoLegs: entity.type === Type.Human
  }
});
// ...
// some other code
// ...
const tooManyTimesMappedArr = mappedArr.map((entity) => {
  return {
    ...entity,
    greeting: entity.type === Type.Human ? 'hello' : 'none'
  }
});

console.log(tooManyTimesMappedArr);
// Output:
// [
//   { name: 'Frogi', type: 'frog', walkingOnTwoLegs: false, greeting: 'none' },
//   { name: 'Mark', type: 'human', walkingOnTwoLegs: true, greeting: 'hello' },
//   { name: 'John', type: 'human', walkingOnTwoLegs: true, greeting: 'hello' },
//   { name: 'Rexi', type: 'dog', walkingOnTwoLegs: false, greeting: 'none' }
// ]

```

### Good Sample

chain `map()`

``` js

const mappedArr = data
  .map((entity) => {
    return {
      ...entity,
      walkingOnTwoLegs: entity.type === Type.Human
    }
  })
  .map((entity) => {
    return {
      ...entity,
      greeting: entity.type === Type.Human ? 'hello' : 'none'
    }
  });

console.log(mappedArr);
// Output:
// [
//   { name: 'Frogi', type: 'frog', walkingOnTwoLegs: false, greeting: 'none' },
//   { name: 'Mark', type: 'human', walkingOnTwoLegs: true, greeting: 'hello' },
//   { name: 'John', type: 'human', walkingOnTwoLegs: true, greeting: 'hello' },
//   { name: 'Rexi', type: 'dog', walkingOnTwoLegs: false, greeting: 'none' }
// ]

```

### Perfect Sample

Reduce a usage of `map()` as much as possible
Some methods (especially Array methods) needs heavier

``` js

const mappedArr = data.map((entity) => 
  entity.type === Type.Human ? {
    ...entity,
    walkingOnTwoLegs: true,
    greeting: 'hello'
  } : {
    ...entity,
    walkingOnTwoLegs: false,
    greeting: 'none'
  }
);

console.log(mappedArr);
// Output:
// [
//   { name: 'Frogi', type: 'frog', walkingOnTwoLegs: false, greeting: 'none' },
//   { name: 'Mark', type: 'human', walkingOnTwoLegs: true, greeting: 'hello' },
//   { name: 'John', type: 'human', walkingOnTwoLegs: true, greeting: 'hello' },
//   { name: 'Rexi', type: 'dog', walkingOnTwoLegs: false, greeting: 'none' }
// ]

```