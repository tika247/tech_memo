# execute some command sequently

``` git

git add . && git commit -m 'hogehoge'

```

# Git Subtreeの使い方

1. サブリモートリポジトリの登録

- git remote add <任意のサブリモートリポジトリ名> <プロジェクトのgitパス>
    - ex）`git remote add subtree https://gitlab.mitsue.com/nishina-takahiro/git_subtree.git`

2. サブリモートリポジトリにsub_repository/mainブランチを作成する

- git checkout -b <作成するローカルブランチ名>
    - ex）`git checkout -b project01/main`
- git push <サブリモートリポジトリ名> <プッシュしたいローカルブランチ名>
    - ex）`git push subtree project01/main`

3. 親リポジトリでライブラリとするディレクトリをsubtreeとしてインポート

- 親リポジトリにチェックアウトした状態で、git subtree add --prefix=<ライブラリとしてのディレクトリパス> <サブリモートリポジトリ名> <サブリモートリポジトリのブランチ名>
    - ex）`git subtree add --prefix=project01 subtree project01/main`

4. サブリポジトリでは、ライブラリのディレクトリ配下に入るファイルのみ置くようにする

## サブリポジトリの修正を親リポジトリに反映する

5. 親リポジトリにチェックアウトした状態で、subtreeでの修正を親リモートリポジトリにpushする

- git subtree push --prefix=<ライブラリとしてのディレクトリパス> <サブリモートリポジトリ名> <サブリモートリポジトリのブランチ名>
    - ex）`git subtree push --prefix=project01 subtree project01/main`

6. 親リポジトリにチェックアウトした状態で、subtreeでの修正を親リモートリポジトリでpullする

- git subtree pull --prefix=<ライブラリとしてのディレクトリパス> <サブリモートリポジトリ名> <サブリモートリポジトリのブランチ名>
    - ex）`git subtree pull --prefix=project01 subtree project01/main`

## 親リポジトリの修正をサブリポジトリに反映する

7. サブリポジトリにチェックアウトした状態で

- git subtree pull --prefix=<ライブラリとしてのディレクトリパス> --squash <サブリモートリポジトリ名> <親リポジトリのブランチ>
    - ex）`git subtree pull --prefix=project01 subtree main`