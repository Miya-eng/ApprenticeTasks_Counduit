# Conduit

今回は Counduit と同じ見た目・機能のサイトを Laravel で実装します。

## ステップ1

以下のページの HTML と CSS を実装し、ページを作成。また、各ページにアクセスできるようにします。

- [Home]
- [Create/Edit Article]
- [Article]

## ステップ2

以下の機能を実装し、動作するようにします。

1. Home 画面の記事が表示されている下に「Create」ボタンを配置する。ボタンを押下したときに Create 画面に遷移する。
2. Create 画面で項目(タイトル, サブタイトル, 記事内容, タグ)を入力して「Publish Article」を押下したときに、DB に保存されて HOME 画面の3つ目の記事として表示される。(以降, Create するたびに4つ目、5つ目として表示される)
3. Home 画面の記事をクリックすると、その記事の Article 画面に遷移する。
4. Article 画面で「Edit Article」ボタンを押下すると、Edit 画面に遷移する。また、各項目には記事作成時に保存されている情報を DB から取得し表示されている状態にする。
5. Edit 画面で項目を編集して「Publish Article」を押下したときに、DB に保存され、HOME 画面の記事も更新される。
6. 「Delete Article」ボタンを押下したときに DB から記事が削除され、HOME 画面からも削除される。

## ステップ3

以下のページの HTML と CSS を実装し、ページを作成。また、各ページにアクセスできるようにします。

- [Authentication](Sign In), (Sign Up)


## ステップ4

以下の機能を実装し、動作するようにします。

1. Authentication(Sign In)画面でメールアドレスとパスワードを入力して「Sign In」ボタンを押下したときに、ログイン処理が実行される。
2. Authentication(Sign Up)画面でメールアドレスとパスワードを入力して「Sign Up」ボタンを押下したときに、ユーザー登録処理が実行される。
3. ログイン処理、ユーザー登録処理が成功した場合は、HOME画面に遷移する。
4. Home 画面、Article 画面でログイン情報を利用して、記事に著者が表示されるようにする。
5. Article 画面でログイン情報を利用して、認証機能を実装する。著者のみ「Edit Article」ボタンを表示するようにして著者だけが記事を編集できるようにする。
6. Article 画面でログイン情報を利用して、認証機能を実装する。著者のみ「Delete Article」ボタンを表示するようにして著者だけが記事を削除できるようにする。
7. Home 画面に表示される記事の最大数を5件にして、ページネーションを実装し、ページネーションをクリックすると次の5件が表示されるようにする。

## 追加ステップ
ログアウト機能の実装。
Profileページを追加し、記事を書いたユーザーの情報を閲覧できるようにする。その際、ユーザーは他のユーザーの記事を編集できないように注意。
Your Feed（自分の記事のみ表示）, Global Feed（全ユーザーの記事を表示）の機能を追加。




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# ApprenticeTasks_Counduit
