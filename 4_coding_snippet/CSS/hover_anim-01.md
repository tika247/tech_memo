# when mouseOn, line stretch in from left, when mouseOut line shrink out to right

``` css

.target {
    position: relative;
}

.target:after {
    position: absolute;
    content: "";
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #fff;
    transform: scaleX(0);
    transition: transform .6s cubic-bizier(.19, 1, 0.22, 1);
    transform-origin: right center;
}
.target:hover::after {
    transform: scaleX(1);
    transform-origin: left center;
    transition-duration: .4s;
}

```