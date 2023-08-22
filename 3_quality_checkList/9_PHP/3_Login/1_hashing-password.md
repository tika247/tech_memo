# Hashing Password

Passwords passed from users must be hashed.
If not, when server is attacked, password would be stolen.

- password_hash()
- crypt()

* priority is password_hash() > crypt()

[More Detail](https://www.php.net/manual/ja/faq.passwords.php)

## Note

暗号化はNG
「ハッシュ化」は不可逆変換だが、「暗号化」は可逆変換。
暗号化した場合、暗号化のルールが読み取られると元のパスワードが判明して（復号されて）しまう