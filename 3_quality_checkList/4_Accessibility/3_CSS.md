# CSS

- Check images for decoration are implimented by CSS (not by HTML img tag)
- Check a contrast btw elements
- Consider setting dark mode
- Hide text to read out to tell the functionality to the blind
    - ``` css
    clip: rect(0 0 0 0);
    clip-path: inset(50%);
    height: 2px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap;
    width: 2px;
    ```