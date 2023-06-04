# Set

## Feature

Set Object is like Array, but it dose not have features below.

- duplication of a same value is not allowed（値に重複はありえない）
- no `index concept` (so SomeSet[0] will never work)（インデックスの概念がない）
- Without `index concept`, no way to get specific one value. Iteration is to be must.

## Usage

``` js
const collection = new Set();

// or

const collection = new Set(['1', {}, []]);
console.log(collection); // [1, {}, []]

// addition
const collection = new Set();
collection.add('1');
collection.add({});
collection.add([]);

// deletion

const collection = new Set(['1', '2', '3', '4']);
const deletedResult = collection.delete('2'); // delte value and alse return boolean if deltetion is completed
console.log(deletedResult); // true

// clear
const collection = new Set(['1', '2', '3', '4']);
collection.clear(); // delete all value

// has
const collection = new Set(['1', '2', '3', '4']);
console.log(collection.has('2')); // true

```

## Practical way

Using the feature of no-duplication, possible to delete duplicated value from an Array

``` js

const arrayWithDuplication = [ "東京都", "神奈川県", "埼玉県", "神奈川県", "千葉県", "東京都"];
const arrayWithoutDuplication = new Set(arrayWithDuplication);

```

## reference
https://hataworakuni.net/set-in-javascript

## Note

- if an argument is `Object`, refer to [Map Operator]('./Map_Operator.md')
- if a key is `Object`, use of `WeakSet` is better?