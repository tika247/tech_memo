# Event Emitter

[参考](https://www.yoheim.net/blog.php?q=20170103)


## Usage

```js
// app.js

// EventEmitterをrequireで読み込む
const EventEmitter = require('events').EventEmitter;

// EventEmitterのインスタンスを作成する
const ev = new EventEmitter();

// 01. イベントを受け取る人
//=======================================
// イベントを受け取る
ev.on('data', data => {
    console.log('dataを受け取ったよ：', data);
})
// イベントを受け取る（1回限り）
ev.once('data', data => {
    console.log('dataを受け取ったよ(1回限り)：', data);
});

// イベントを発行する人
//=======================================
ev.emit('data', 1);
ev.emit('data', 2);
ev.emit('data', 3);
```