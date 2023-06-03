# Disclaimer
This is forked from https://github.com/ngerakines/commitment and modified for my own use. (Namely removing the explicit messages so I can use it at work lol)

# About WTC (What The Commit)
Commitment is a small PHP application that generates random commit messages.

    https://wtc.wanderingcrow.net

Commitment also provides https://wtc.wanderingcrow.net/text which provides plain text output.  
Some interesting usage for that can be:
```
git config --global alias.yolo '!git add . && git commit -m "$(curl -s https://wtc.wanderingcrow.net/text)" && git push'
```

# License

Copyright (c) 2010-2021 Nick Gerakines <nick@gerakines.net>

This project and its contents are open source under the MIT license.
