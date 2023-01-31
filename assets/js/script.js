function mtv_share(element) {
    if (navigator.share) {
        window.event.preventDefault();
        window.event.stopPropagation();
        navigator.share({
            title: element.title,
            text: element.getAttribute('post_title'),
            url: element.getAttribute('link')
        });
        return true;
    }
}