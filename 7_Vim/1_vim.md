# Vim

# vim {file.name}

open a file with vim

## h, j, k, l

move cursor

## i

switch to insert mode

## Esc

switch to Normal mode

## :q!

exit editor forcibly

* discard any changes

## A

switch to insert mode and move cursor to the end of line

## :wq

save a file and exit

## u

undo the last change

## R

redo the last change

## x

delete a letter

## dw

delete until the start of the next word

* move the cursor to the beginning of a word

## de

delete to the end of the current word

* move the cursor to the beginning of a word

## D

## d$

delete all from a cursor to the end of the line

## d0

delete all from a cursor to the start of the line

delete all from a cursor to the end of the line

## 0

move to the first of the line

## w

move cursor by an every single word

## d2w

delete 2 words

## dd

delete a whole line

## p

put previously deleted text as a next line of the cursor' position

## r

- move cursor to a letter you want to replace
- type `r`
- type a letter you want to change

## Ctrl + g

displays your location in the file and the file status

## gg 

move to the first line of a file

## Shift + g

move to the last line of a file

## /

search a word

if search the other same word

- n
    - search forward
- N
    - search backward

## %

find a matching ),], or }
and move a cursor

## :s/old/new

change old to new

- :s/old/new/g
    - if `/g` is put, change all occurrences in the line
- :%s/old/new/g
    - change all occurrences in the file

## Ctrl + d, Ctrl + u

- Ctrl + d
    - scroll down for a half of screen
- Ctrl + u
    - scroll up for a half of screen

## y1w

yanc(copy) a word

## p

paste at the follwing of cursor

* P is previous