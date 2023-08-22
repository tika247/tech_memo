# HTML

- Check each element is constructed with HTML in appropriate order
    - with Screen Reader's read-aloud
- check setting additional CSS file loading to deal with an environment where JavaScript is disabled
    - with HTML `noscript` tag
- Check focus movement by keyboard key, such as Tab or Tab+Shift, is correct
- Check an alt optimization for images
- Check text of link-text describes linked page
- Check each button has appropriate alt-text to let user know how the buttion will work
- Check `input` is associated with `label`. if not for some reason, add `title` attribute
- Consider, if video, setting alt-text to describe what is spoken in it
- Check information provided with color or icon is also provided with alt-text
    - e.g. use `aria-current="step"` in a flow contents
    - e.g. use `aria-current="date"` in a calendar
- Consider setting a flashing animation, such as scroll-prompt, automatically stops in 5 second
- Consider setting controllers to manipulate the play or volume for video or animation