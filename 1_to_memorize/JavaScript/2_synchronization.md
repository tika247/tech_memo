# Synchronization

## Promise.allSettled()

specify some functions that are executed at the same time and returned the all results

```js
const promises = [
  Promise.resolve(1),
  Promise.reject('Error'),
  Promise.resolve(3)
];

Promise.allSettled(promises)
  .then(results => console.log(results));

// Output:
// [
//   { status: 'fulfilled', value: 1 },
//   { status: 'rejected', reason: 'Error' },
//   { status: 'fulfilled', value: 3 }
// ]
```