## `<use>` in `<svg>`

designated node by id attribute will be cloned and the cloned is handled as `template elements`.

ex) 

- write inline svg code somewhere in html file, and set `display: none`

``` html

<symbol id="svg_icon_link_arrow_basic">
<path id="svg_icon_link_arrow_basic__wing" d="M48.6 98.514c-1.8 0-3.6-.7-4.9-2-2.7-2.7-2.7-7.1 0-9.8l36.7-36.7-36.7-36.7c-2.7-2.7-2.7-7.1 0-9.8s7.1-2.7 9.8 0l46.5 46.5-46.5 46.5c-1.4 1.4-3.2 2-4.9 2z"/>
<path id="svg_icon_link_arrow_basic__shaft" d="M6.9 43.014h76.3c3.8 0 6.9 3.1 6.9 6.9 0 3.8-3.1 6.9-6.9 6.9H6.9c-3.8 0-6.9-3.1-6.9-6.9 0-3.7 3.1-6.9 6.9-6.9z"/>
</symbol>

```

- then in the other code, designate node you want to use repeatedly
    the following is arrow icon usually used in text-link

``` html

<svg viewBox="0 0 100 100" class="icon_link_arrow_basic">
<use href="#svg_icon_link_arrow_basic__wing" class="icon_link_arrow_basic__wing"></use>
<use href="#svg_icon_link_arrow_basic__shaft" class="icon_link_arrow_basic__shaft"></use>
</svg>

```

### reference

[https://www.evoworx.co.jp/blog/svg-symbol/](https://www.evoworx.co.jp/blog/svg-symbol/)