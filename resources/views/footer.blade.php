<script src="https://wchat.freshchat.com/js/widget.js"></script>
<script>
    window.fcWidget.init({
        token: "a49d0cf4-2447-45d9-af63-e62cf3ea6b6d",
        host: "https://wchat.eu.freshchat.com",
        locale: "sv",
        config: {
            content: {
                headers: {
                    chat: 'BEHÖVER DU HJÄLP?',
                    //             chat_help: 'Du kan skriva till oss eller nå oss på telefon',
                },
                //         placeholders: {
                //             search_field: 'Search',
                //             reply_field: 'Reply',
                //             csat_reply: 'Add your comments here'
                // }
            }
        }

    });
</script>
<script>
    //Consider a dropdown with id #lang-btn to select the language
    $('#lang-btn').on('change', function() {
        var selectedLanguage = jQuery(this).val();
        //Setting the Widget Locale
        window.fcWidget.user.setLocale(sv);
    });
</script>
</body>

</html>
