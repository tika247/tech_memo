## alternative method of escape()

- this is a case when dealing with decryption

``` js 

/**
 * escape()の代替処理
 * @param {str} str
 * @returns {str} escape()処理後の文字列
 */
const alternativeMethodOfEscape = (str) => {
    const escapedStr = str.replace(/[^a-zA-Z0-9@*_+\-./]/ug, (m) => {
        let adjustedStr = null;
        const code = m.charCodeAt(0);
        if (code <= 0xFF) {
            const step1 = `00${code.toString(16)}`;
            const step2 = `%${step1.slice(-2).toUpperCase()}`;

            adjustedStr = step2;
        } else {
            const step1 = `0000${code.toString(16)}`;
            const step2 = `%u${step1.slice(-4).toUpperCase()}`;

            adjustedStr = step2;
        }

        return adjustedStr;
    });

    return escapedStr;
};
ngWordList = window.atob(ngWordList);
ngWordList = alternativeMethodOfEscape(ngWordList);
ngWordList = decodeURIComponent(ngWordList);
ngWordList = ngWordList.trim().split('\r\n');
store.dispatch('setNgWordList', ngWordList);

```