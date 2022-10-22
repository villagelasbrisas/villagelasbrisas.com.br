window.onscroll = function(){
    const evaluations = document.getElementById('evaluations');
    const evaluationsHeigh = evaluations.offsetHeight;
    const windowHeigh = window.innerHeight;

    var supportPageOffset = window.pageXOffset !== undefined;
    var isCSS1Compat = ((document.compatMode || '') === 'CSS1Compat');

    var windowScroll = supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;

    const evaluationsTop = getOffset(evaluations).top;
    const distance = evaluationsTop - windowScroll - windowHeigh;

    if(distance <= -evaluationsHeigh){
        window.onscroll = undefined;

        const iframe = document.getElementById('google-maps');
        const url = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.4068796012184!2d-38.67588596620637!3d-13.03799720544944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x715ff8d6081d23f%3A0xb31493fe00d3bbc0!2sVillage%20Las%20Brisas!5e0!3m2!1spt-BR!2sbr!4v1568762940324!5m2!1spt-BR!2sbr';
        iframe.src = url;
    }
};

function getOffset(element){
    if (!element.getClientRects().length){
      return { top: 0, left: 0 };
    }

    let rect = element.getBoundingClientRect();
    let win = element.ownerDocument.defaultView;
    return (
    {
      top: rect.top + win.pageYOffset,
      left: rect.left + win.pageXOffset
    });
}
