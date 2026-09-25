const {chromium}=require('/Users/imac/.npm/_npx/e41f203b7505f1fb/node_modules/playwright');
(async()=>{const b=await chromium.launch();const c=await b.newContext({viewport:{width:1440,height:1080}});const p=await c.newPage();
await p.goto('http://127.0.0.1:9400/',{waitUntil:'load',timeout:90000});await p.evaluate(()=>document.fonts.ready);await p.waitForTimeout(1500);
await p.screenshot({path:__dirname+'/cover.png'});await b.close();})();
