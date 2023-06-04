# Vue

## v-slot

- ModalDialog.vue(Child)

``` vue
<template>
  <h1>
    <slot name="title"></slot>
  </h1>
  <div class="modal__content">
    <slot></slot>
  </div>
</template>
```

- SamplePage.vue(Parent)

``` vue
<template>
  <ModalDialog>
    <!-- show name-slot -->
    <template v-slot="title">
      <span>タイトル</span>
    </template>
    <!-- show slot inside .modal__content -->
    <p>show some contents</p>
  </ModalDialog>
</template>
```

## KeepAlive 

- to cache some data when UI changes
    - ex. Tab

https://blog.freamap.co.jp/vue-keep-alive/

## teleport

https://ja.vuejs.org/guide/built-ins/teleport.html#basic-usage


## SSR

https://ja.vuejs.org/guide/scaling-up/ssr.html

## SSG

VitePress

https://vitepress.dev/

## Laravel×Vue.js

https://tech.amefure.com/php-laravel-vue-environment