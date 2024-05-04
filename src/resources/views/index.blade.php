<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form_content">
            <div class="contact-form_heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">お名前</span>
                        <span class="form_label-required">必須</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="text" name="name" placeholder="テスト太郎" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します-->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">メールアドレス</span>
                        <span class="form_label-required">必須</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="email" name="email" placeholder="test@example.com" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します-->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">電話番号</span>
                        <span class="form_label-required">必須</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="tel" name="tel" placeholder="09012345678" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します-->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">お問い合わせ</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-textarea">
                            <textarea name="content" placeholder="資料をいただきたいです"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form_button">
                    <button class="form_button-submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>