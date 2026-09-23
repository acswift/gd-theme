# RECALL

## 2026-07-06

Fixed WordPress contact form emails being flagged as spam. Root cause: Ninja Forms was using `list@acswift.com` as the `From:` address, but the server authenticates as `generatordata.net` — DMARC alignment failure. Added three filters to `functions.php`: `wp_mail_from` (forces `noreply@generatordata.net`), `wp_mail_from_name`, and `wp_mail` (injects `Reply-To: list@acswift.com`). Fix confirmed working. No next step.

## 2026-06-23

Added `.notice` class to `classes.css` — a boxed `<p>` with `#eee` background, `0.5px solid #555` border, `5px` rounded corners, `10px 15px 12px 15px` padding, font `calc(1em - 1.5px)`, and `line-height:calc(1lh - 1.5px)`. Selector is `div.entry-content p.notice`. Class is ready to use in WordPress with `<p class="notice wp-block-paragraph">`. No obvious next step — user was tweaking visuals iteratively.
