/**
 * check if share is supported and replace the link with a function
 * 
 * @param {*} element 
 * @returns 
 */
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