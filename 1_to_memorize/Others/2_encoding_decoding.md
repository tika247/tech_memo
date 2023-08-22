# Encode

encoding refers to the process of converting a string of characters into a sequence of bytes that can be stored or transmitted over a network.

## Base64 Encoding

to convert a string with a regulation handling 64 charactors (Alphabet, numbers, symbol(partial) and =(always comes as a final letter))

## Why Encoding is necessary

- E-Mail

only ASCII(7bit) can be used in E-Mail so Japanese and attachment files like image cannot be used there.
To handle this issue, there is MIME.
MIME preconvert strings into the Base64 encoded then send it.
Receiver of that mail decode it into the original and make it possible to read for human.

Like a case above, encoding is used when usable language charactors or symbols are limited or restricted

## Decode

to convert back an encoded string to the original