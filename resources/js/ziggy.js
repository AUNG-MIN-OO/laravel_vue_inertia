const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"logout":{"uri":"logout","methods":["GET","HEAD"]},"home":{"uri":"\/","methods":["GET","HEAD"]},"profile.edit":{"uri":"edit-profile","methods":["GET","HEAD"]},"profile.post.edit":{"uri":"edit-profile","methods":["POST"]},"question.detail":{"uri":"question-detail\/{slug}","methods":["GET","HEAD"]},"question.like":{"uri":"question\/like\/{id}","methods":["GET","HEAD"]},"login":{"uri":"login","methods":["GET","HEAD"]},"post.login":{"uri":"login","methods":["POST"]},"register":{"uri":"register","methods":["GET","HEAD"]},"post.register":{"uri":"register","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
