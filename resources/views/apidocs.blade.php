<!DOCTYPE html><html><head><meta charset="utf-8"><title>Laravel API</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:black;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #ededed;margin-bottom:12px}h1,h2,h3,h4,h5{color:black;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#18bc9c;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(0,0,0,0) 20%, rgba(0,0,0,0.2) 51.4%, rgba(255,255,255,0.2) 51.4%, rgba(255,255,255,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(0,0,0,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:6px;overflow:auto}pre code{color:black;background-color:transparent;padding:0;border:none}code{color:#444;background-color:#f5f5f5;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:black;background-color:#eff7fc;border-left:4px solid #3498db}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#3498db}.warning{color:black;background-color:#fcf0ef;border-left:4px solid #d62c1a}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#d62c1a}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:black;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(0,0,0,0.7);padding:8px 12px;border-top:1px solid #ededed;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#000;background-color:#ededed;border-radius:10px;margin:-2px 0}.badge.get{color:white;background-color:#3498db}.badge.head{color:white;background-color:#3498db}.badge.options{color:white;background-color:#3498db}.badge.put{color:white;background-color:#f39c12}.badge.patch{color:white;background-color:#f39c12}.badge.post{color:white;background-color:#18bc9c}.badge.delete{color:white;background-color:#e74c3c}.collapse-button{float:right}.collapse-button .close{display:none;color:#18bc9c;cursor:pointer}.collapse-button .open{color:#18bc9c;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#18bc9c}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:white}.right pre{background-color:#1d1f21;border:1px solid #1d1f21}.right pre code{color:#c5c8c6}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e80b8}.definition .method.head{color:#2e80b8}.definition .method.options{color:#2e80b8}.definition .method.post{color:#2eb89d}.definition .method.put{color:#b8822e}.definition .method.patch{color:#b8822e}.definition .method.delete{color:#b83b2e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:black;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#444}.right .example-names .tab-button{color:white;border:1px solid #666;border-radius:6px}.right .example-names .tab-button.active{background-color:#5e5e5e}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#fbfbfb;border-right:1px solid #f0f0f0;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#333;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(0,0,0,0.5);background-color:#ededed;text-decoration:none !important;border-top:1px solid #ededed;border-left:1px solid #ededed;border-right:1px solid #ededed;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:white;border:1px solid #ededed;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#ededed;border-bottom:1px solid #ededed;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #ededed}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px;display:inline-block}.action h4.action-heading .method.get{color:#000;background-color:white}.action h4.action-heading .method.head{color:#000;background-color:white}.action h4.action-heading .method.options{color:#000;background-color:white}.action h4.action-heading .method.put{color:#000;background-color:white}.action h4.action-heading .method.patch{color:#000;background-color:white}.action h4.action-heading .method.post{color:#000;background-color:white}.action h4.action-heading .method.delete{color:#000;background-color:white}.action h4.action-heading code{color:#444;background-color:rgba(255,255,255,0.7);border-color:transparent;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid white;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#3498db}.action.get h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.head{border-color:#3498db}.action.head h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.options{border-color:#3498db}.action.options h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.post{border-color:#18bc9c}.action.post h4.action-heading{color:white;background:#18bc9c;border-bottom-color:#18bc9c}.action.put{border-color:#f39c12}.action.put h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.patch{border-color:#f39c12}.action.patch h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.delete{border-color:#e74c3c}.action.delete h4.action-heading{color:white;background:#e74c3c;border-bottom-color:#e74c3c}</style></head><body class="preload"><div id="nav-background"></div><div class="container-fluid triple"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#top">Overview</a></div><div class="collapse-content"><ul><li><a href="#header-authentication">Authentication</a></li><li><a href="#header-headers">Headers</a></li><li><a href="#header-errors">Errors</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#auth">Auth</a></div><div class="collapse-content"><ul><li><a href="#auth-tokens-post"><span class="badge post"><i class="fa fa-plus"></i></span>Get a token</a></li><li><a href="#auth-register-post"><span class="badge post"><i class="fa fa-plus"></i></span>Register user</a></li><li><a href="#auth-password-recovery">Password Recovery</a><ul><li><a href="#auth-password-recovery-post"><span class="badge post"><i class="fa fa-plus"></i></span>Forgot Password</a></li><li><a href="#auth-password-recovery-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Reset Password</a></li></ul></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#users-api">Users API</a></div><div class="collapse-content"><ul><li><a href="#users-api-users-resource">Users resource</a><ul><li><a href="#users-api-users-resource-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List users</a></li><li><a href="#users-api-users-resource-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create User</a></li><li><a href="#users-api-users-resource-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get single user</a></li><li><a href="#users-api-users-resource-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Update User</a></li><li><a href="#users-api-users-resource-patch"><span class="badge patch"><i class="fa fa-pencil"></i></span>Partial update User</a></li><li><a href="#users-api-users-resource-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete User</a></li></ul></li><li><a href="#users-api-roles-resource">Roles resource</a><ul><li><a href="#users-api-roles-resource-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List roles</a></li><li><a href="#users-api-roles-resource-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create Role</a></li><li><a href="#users-api-roles-resource-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get single role</a></li><li><a href="#users-api-roles-resource-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Update Role</a></li><li><a href="#users-api-roles-resource-patch"><span class="badge patch"><i class="fa fa-pencil"></i></span>Partial update Role</a></li><li><a href="#users-api-roles-resource-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete Role</a></li></ul></li><li><a href="#users-api-permissions-resource-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List permissions</a></li><li><a href="#users-api-users-profile">Users profile</a><ul><li><a href="#users-api-users-profile-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get logged in user profile</a></li><li><a href="#users-api-users-profile-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Full update logged in user profile</a></li><li><a href="#users-api-users-profile-patch"><span class="badge patch"><i class="fa fa-pencil"></i></span>Partial update logged in user profile</a></li><li><a href="#users-api-users-profile-put-1"><span class="badge put"><i class="fa fa-pencil"></i></span>Change logged in user password</a></li></ul></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#assets-api">Assets API</a></div><div class="collapse-content"><ul><li><a href="#assets-api-images-post"><span class="badge post"><i class="fa fa-plus"></i></span>Upload a file</a></li></ul></div></div><p style="text-align: center; word-wrap: break-word;"><a href="https://example.com">https://example.com</a></p></nav><div class="content"><div id="right-panel-background"></div><div class="middle"><header><h1 id="top">Laravel API</h1></header></div><div class="right"><h5>API Endpoint</h5><a href="https://example.com">https://example.com</a></div><div class="middle"><p>Welcome to the Starter Kit API, here you will find all the information related to the endpoints available.</p>
<h2 id="header-authentication">Authentication <a class="permalink" href="#header-authentication" aria-hidden="true">¶</a></h2>
<p>The API uses <a href="https://oauth.net/2/">oAuth2</a> for authentication, this means that all API calls should contain and authorization that looks like this</p>
<pre><code><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer API_KEY_HERE</span></code></pre>
<p>Please see the Authentication documentation to know how to get an access token.</p>
<h2 id="header-headers">Headers <a class="permalink" href="#header-headers" aria-hidden="true">¶</a></h2>
<p>Make sure you have the following content type headers are set on every request:</p>
<pre><code class="language-http"><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span>
<span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre>
<h2 id="header-errors">Errors <a class="permalink" href="#header-errors" aria-hidden="true">¶</a></h2>
<p>The API uses conventional HTTP response codes to indicate the success or failure of an API request. The table below contains a summary of the typical response codes:</p>
<table>
<thead>
<tr>
<th>Code</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>200</td>
<td>Everything is ok.</td>
</tr>
<tr>
<td>400</td>
<td>Valid data was given but the request has failed.</td>
</tr>
<tr>
<td>401</td>
<td>No valid API Key was given.</td>
</tr>
<tr>
<td>404</td>
<td>The request resource could not be found.</td>
</tr>
<tr>
<td>405</td>
<td>The method is not implemented</td>
</tr>
<tr>
<td>413</td>
<td>The Body is too large</td>
</tr>
<tr>
<td>422</td>
<td>The payload has missing required parameters or invalid data was given.</td>
</tr>
<tr>
<td>429</td>
<td>Too many attempts.</td>
</tr>
<tr>
<td>500</td>
<td>Request failed due to an internal error.</td>
</tr>
<tr>
<td>503</td>
<td>API is offline for maintenance.</td>
</tr>
</tbody>
</table>
</div><div class="middle"><section id="auth" class="resource-group"><h2 class="group-heading">Auth <a href="#auth" class="permalink">&para;</a></h2><p>The auth API will allow you to work with the users registration and password management.</p>
</section></div><div class="middle"><div id="auth-tokens" class="resource"><h3 class="resource-heading">Tokens <a href="#auth-tokens" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/oauth/token</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span><span class="tab-button">example 2</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">grant_type</span>": <span class="hljs-value"><span class="hljs-string">"password"</span></span>,
  "<span class="hljs-attribute">client_id</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
  "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value"><span class="hljs-string">"isudaiusyd87a6s87atsd8a7std"</span></span>,
  "<span class="hljs-attribute">username</span>": <span class="hljs-value"><span class="hljs-string">"jose@example.com"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"Password123**"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">grant_type</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The grant type to use"</span>
    </span>}</span>,
    "<span class="hljs-attribute">client_id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"the client id"</span>
    </span>}</span>,
    "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The client secret"</span>
    </span>}</span>,
    "<span class="hljs-attribute">username</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The username for the user being authenticated"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The password for the user being authenticated"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"grant_type"</span>,
    <span class="hljs-string">"client_id"</span>,
    <span class="hljs-string">"client_secret"</span>,
    <span class="hljs-string">"username"</span>,
    <span class="hljs-string">"password"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">token_type</span>": <span class="hljs-value"><span class="hljs-string">"Bearer"</span></span>,
  "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value"><span class="hljs-string">"86400"</span></span>,
  "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span></span>,
  "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value"><span class="hljs-string">"def50200cd296202fa3d84fb5fedb48f09453ac34afafaa05446bab2b0d927821b9c79ba8239ef2c1825fdee70d03e9504d3e739ec8d5efcf79b5cae61dd081972105d75d196b16214087a80df5c1a2616bbff9c22b75077ca7cc2c9c1176cb3fe1404d3ae3e868e01989ef432521839912fe8ffd39a4048ced88f0c4cd52d01fa7c25166bdab9ab104a419705444bf3b316f00e4b0b1edcee80b0b1b6ec748a62a974089994f215abdc2a6b537f0ceb93dbe0f828bbd338d00f4583ec992bb1bee5fec646082e5a38a1f35ed1931ed3a05b7a0e261261e3e31430d134392ffe6b4a4dcd4e8247b4646ad64e42533ebe9357794d331f77566b3e1b236f27afd4b29d44c109997042d918c2243d43a49e3847b084989639e9b5765b8da62f67f497f3b0a965f7cb36a1fecb738370537c8be4d432a518cbe78a0ebc8704fdd0111afe1bd705f9b5b0257aeb88da6c681a88219940e5ac7b9b686dd57ad4b466ab57"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">token_type</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The token type"</span>
    </span>}</span>,
    "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"When the token expires"</span>
    </span>}</span>,
    "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"tsYbkckaauVRlgpfeMExcxe261-8WWEGU0HQDaHxrXcojWQr5LwsnCno_elxLsqoXRZXrKe8s70zs6wwKnqc8tZkrUDkpFt4bjHHtCF1M4xGxA8kNNFs_sqyN0P-amWt1gfuMaALWxgYeISpAAzfP6KgqWVmP3JqDWQAIMhh8NO2kEkfE6rgxQXp0zzvlvvZ7RSYc0sV8JrSnwa15z-q7-1oQ4XFqmYxv-90i_Jrf5N3gz-VON6ovt26Vh7qNeHKFkf98DwHiu5XF6cDHpiZBKwfjlFzG6-0ZPN1ROIXPt5Bk35xLlUUgB6f5kPHZMPfMTuWGneeTbFm_5igdyxwaBqEVfVnuFPnIv5oaKKbAQleyo-yt_LZe9qxFNx-LFlMHmDyAqdfKkra0HG6dCfxynV6x2RtRZHyicN6fDPekTMBs356vNlRRL1dEEzZ4Fbpft4TRZylyqarAXfGb7kCKCuuuHbO8LT6f2yk5JW3Ngc-gfb1dfTO0bfgtl0Rg6l8PWGStSnmyXqeNxLej0XKhrPuqft1JFtucUCw8gUjrcuqSmAAzvXBTbLLvb65WSTnl_tOFviaSeBF-zCJxkxD2uJ1b31YuKMkVd-9dpMs` (string) - The Access token"</span>
    </span>}</span>,
    "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Refresh token"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">grant_type: `social_grant`</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span></span>,
  "<span class="hljs-attribute">client_id</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
  "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value"><span class="hljs-string">"isudaiusyd87a6s87atsd8a7std"</span></span>,
  "<span class="hljs-attribute">provider</span>": <span class="hljs-value"><span class="hljs-string">"github"</span></span>,
  "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"sdoifu98a7sd87fytbs8d67ftnabs786dnta76std"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">grant_type: `social_grant`</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The grant type to use"</span>
    </span>}</span>,
    "<span class="hljs-attribute">client_id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"the client id"</span>
    </span>}</span>,
    "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The client secret"</span>
    </span>}</span>,
    "<span class="hljs-attribute">provider</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The provider to use"</span>
    </span>}</span>,
    "<span class="hljs-attribute">token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The token obtained by the provider"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"grant_type: `social_grant`"</span>,
    <span class="hljs-string">"client_id"</span>,
    <span class="hljs-string">"client_secret"</span>,
    <span class="hljs-string">"provider"</span>,
    <span class="hljs-string">"token"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">token_type</span>": <span class="hljs-value"><span class="hljs-string">"Bearer"</span></span>,
  "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value"><span class="hljs-string">"86400"</span></span>,
  "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span></span>,
  "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value"><span class="hljs-string">"def50200cd296202fa3d84fb5fedb48f09453ac34afafaa05446bab2b0d927821b9c79ba8239ef2c1825fdee70d03e9504d3e739ec8d5efcf79b5cae61dd081972105d75d196b16214087a80df5c1a2616bbff9c22b75077ca7cc2c9c1176cb3fe1404d3ae3e868e01989ef432521839912fe8ffd39a4048ced88f0c4cd52d01fa7c25166bdab9ab104a419705444bf3b316f00e4b0b1edcee80b0b1b6ec748a62a974089994f215abdc2a6b537f0ceb93dbe0f828bbd338d00f4583ec992bb1bee5fec646082e5a38a1f35ed1931ed3a05b7a0e261261e3e31430d134392ffe6b4a4dcd4e8247b4646ad64e42533ebe9357794d331f77566b3e1b236f27afd4b29d44c109997042d918c2243d43a49e3847b084989639e9b5765b8da62f67f497f3b0a965f7cb36a1fecb738370537c8be4d432a518cbe78a0ebc8704fdd0111afe1bd705f9b5b0257aeb88da6c681a88219940e5ac7b9b686dd57ad4b466ab57"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">token_type</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The token type"</span>
    </span>}</span>,
    "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"When the token expires"</span>
    </span>}</span>,
    "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"tsYbkckaauVRlgpfeMExcxe261-8WWEGU0HQDaHxrXcojWQr5LwsnCno_elxLsqoXRZXrKe8s70zs6wwKnqc8tZkrUDkpFt4bjHHtCF1M4xGxA8kNNFs_sqyN0P-amWt1gfuMaALWxgYeISpAAzfP6KgqWVmP3JqDWQAIMhh8NO2kEkfE6rgxQXp0zzvlvvZ7RSYc0sV8JrSnwa15z-q7-1oQ4XFqmYxv-90i_Jrf5N3gz-VON6ovt26Vh7qNeHKFkf98DwHiu5XF6cDHpiZBKwfjlFzG6-0ZPN1ROIXPt5Bk35xLlUUgB6f5kPHZMPfMTuWGneeTbFm_5igdyxwaBqEVfVnuFPnIv5oaKKbAQleyo-yt_LZe9qxFNx-LFlMHmDyAqdfKkra0HG6dCfxynV6x2RtRZHyicN6fDPekTMBs356vNlRRL1dEEzZ4Fbpft4TRZylyqarAXfGb7kCKCuuuHbO8LT6f2yk5JW3Ngc-gfb1dfTO0bfgtl0Rg6l8PWGStSnmyXqeNxLej0XKhrPuqft1JFtucUCw8gUjrcuqSmAAzvXBTbLLvb65WSTnl_tOFviaSeBF-zCJxkxD2uJ1b31YuKMkVd-9dpMs` (string) - The Access token"</span>
    </span>}</span>,
    "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Refresh token"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="auth-tokens-post" class="action post"><h4 class="action-heading"><div class="name">Get a token</div><a href="#auth-tokens-post" class="method post">POST</a><code class="uri">/oauth/token</code></h4><p>Use this endpoint to get access tokens for the user, the API currently uses oAuth2 and supports 2 grants.</p>
<ul>
<li>
<p><strong>Password:</strong> Use grant <code>password</code> when the user is providing username and password</p>
</li>
<li>
<p><strong>Social grant:</strong> Use grant <code>social_grant</code> when the user has a token from a supported OAuth provider.</p>
</li>
</ul>
</div></div><hr class="split"><div class="middle"><div id="auth-register" class="resource"><h3 class="resource-heading">Register <a href="#auth-register" class="permalink">&para;</a></h3><p>Use this endpoint to register a new user from the client consuming the API.</p>
</div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/register</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jose Fonseca"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"Password123**"</span></span>,
  "<span class="hljs-attribute">password_confirmation</span>": <span class="hljs-value"><span class="hljs-string">"Password123**"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the user"</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The email of the user"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The password of the user"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password_confirmation</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The password confirmation of the user"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"name"</span>,
    <span class="hljs-string">"email"</span>,
    <span class="hljs-string">"password"</span>,
    <span class="hljs-string">"password_confirmation"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">201</span><span class="tab-button">422</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="auth-register-post" class="action post"><h4 class="action-heading"><div class="name">Register user</div><a href="#auth-register-post" class="method post">POST</a><code class="uri">/api/register</code></h4><p>This endpoint will allow you to handle the user registration in the API.</p>
</div></div><hr class="split"><div class="middle"><div id="auth-password-recovery" class="resource"><h3 class="resource-heading">Password Recovery <a href="#auth-password-recovery" class="permalink">&para;</a></h3><p>Use this endpoints to reset the user’s password with a recovery email.</p>
</div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/passwords/reset</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The email of the user"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"email"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">201</span><span class="tab-button">422</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="auth-password-recovery-post" class="action post"><h4 class="action-heading"><div class="name">Forgot Password</div><a href="#auth-password-recovery-post" class="method post">POST</a><code class="uri">/api/passwords/reset</code></h4><p>This endpoint will allow you to trigger the recovery password email.</p>
</div></div><hr class="split"><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/passwords/reset</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
  "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"77d933717e14023a1ddcc4cfa0c1d20ccedeb3acb525092aae34ac1f3f708a51"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"Password123**"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The email of the user"</span>
    </span>}</span>,
    "<span class="hljs-attribute">token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The token received in the email"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The new password of the user"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"email"</span>,
    <span class="hljs-string">"token"</span>,
    <span class="hljs-string">"password"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">201</span><span class="tab-button">422</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The email has been updated"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The message after the reset"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="auth-password-recovery-put" class="action put"><h4 class="action-heading"><div class="name">Reset Password</div><a href="#auth-password-recovery-put" class="method put">PUT</a><code class="uri">/api/passwords/reset</code></h4><p>This endpoint will allow you to update the user’s password with the token received in the email.</p>
</div></div><hr class="split"><div class="middle"><section id="users-api" class="resource-group"><h2 class="group-heading">Users API <a href="#users-api" class="permalink">&para;</a></h2><p>The users API will allow you to work with the users, roles and permissions.</p>
</section></div><div class="middle"><div id="users-api-users-resource" class="resource"><h3 class="resource-heading">Users resource <a href="#users-api-users-resource" class="permalink">&para;</a></h3><p>It requires your user to have permissions to fetch, create, update or delete users in the system depending on the request you want to make</p>
</div></div><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/users</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>},
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>}
        ]
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>},
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>}
        ]
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>},
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>}
        ]
      </span>}
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>},
          {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
            "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
            "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>},
              {
                "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
                "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
                "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
                "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
              </span>}
            ]
          </span>}
        ]
      </span>}
    </span>}
  ]</span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">30</span></span>,
      "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
      "<span class="hljs-attribute">per_page</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
      "<span class="hljs-attribute">current_page</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
      "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">previous</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/users?page=1"</span></span>,
        "<span class="hljs-attribute">next</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/users?page=2"</span></span>,
        "<span class="hljs-attribute">last</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/users?page=2"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}</span>,
    "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">total</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">count</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">per_page</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">current_page</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
              "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">previous</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}</span>,
                "<span class="hljs-attribute">next</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}</span>,
                "<span class="hljs-attribute">last</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}
              </span>}
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-resource-get" class="action get"><h4 class="action-heading"><div class="name">List users</div><a href="#users-api-users-resource-get" class="method get">GET</a><code class="uri">/api/users</code></h4><p>This endpoint will allow you to get the users registered in the system</p>
</div></div><hr class="split"><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/users</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"123456789"</span></span>,
  "<span class="hljs-attribute">password_confirmation</span>": <span class="hljs-value"><span class="hljs-string">"123456789"</span></span>,
  "<span class="hljs-attribute">roles</span>": <span class="hljs-value">[
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>,
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>,
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password_confirmation</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"name"</span>,
    <span class="hljs-string">"email"</span>,
    <span class="hljs-string">"password"</span>,
    <span class="hljs-string">"password_confirmation"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">201</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-resource-post" class="action post"><h4 class="action-heading"><div class="name">Create User</div><a href="#users-api-users-resource-post" class="method post">POST</a><code class="uri">/api/users</code></h4><p>This endpoint will allow you to create a user in the system</p>
</div></div><hr class="split"><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/users/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-resource-get-1" class="action get"><h4 class="action-heading"><div class="name">Get single user</div><a href="#users-api-users-resource-get-1" class="method get">GET</a><code class="uri">/api/users/{id}</code></h4><p>This endpoint will allow you to get a single user</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/users/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"name"</span>,
    <span class="hljs-string">"email"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-resource-put" class="action put"><h4 class="action-heading"><div class="name">Update User</div><a href="#users-api-users-resource-put" class="method put">PUT</a><code class="uri">/api/users/{id}</code></h4><p>This endpoint will allow you to update the user’s information, in this case the payload will have to contain all the entity to be updated.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method patch">PATCH</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/users/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-resource-patch" class="action patch"><h4 class="action-heading"><div class="name">Partial update User</div><a href="#users-api-users-resource-patch" class="method patch">PATCH</a><code class="uri">/api/users/{id}</code></h4><p>This endpoint will allow you to update the user’s information, please note that the attributes are optional meaning you can send only one per request and only that field will be updated.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/users/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">204</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-resource-delete" class="action delete"><h4 class="action-heading"><div class="name">Delete User</div><a href="#users-api-users-resource-delete" class="method delete">DELETE</a><code class="uri">/api/users/{id}</code></h4><p>This endpoint will allow you to delete a user from the system</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="middle"><div id="users-api-roles-resource" class="resource"><h3 class="resource-heading">Roles resource <a href="#users-api-roles-resource" class="permalink">&para;</a></h3><p>It requires your user to have permissions to fetch, create, update or delete roles in the system depending on the request you want to make</p>
</div></div><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/roles</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>}
      ]
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>}
      ]
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>}
      ]
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
        </span>}
      ]
    </span>}
  ]</span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">30</span></span>,
      "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
      "<span class="hljs-attribute">per_page</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
      "<span class="hljs-attribute">current_page</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
      "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">previous</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/roles?page=1"</span></span>,
        "<span class="hljs-attribute">next</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/roles?page=2"</span></span>,
        "<span class="hljs-attribute">last</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/roles?page=2"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}</span>,
    "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">total</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">count</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">per_page</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">current_page</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
              "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">previous</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}</span>,
                "<span class="hljs-attribute">next</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}</span>,
                "<span class="hljs-attribute">last</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}
              </span>}
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-roles-resource-get" class="action get"><h4 class="action-heading"><div class="name">List roles</div><a href="#users-api-roles-resource-get" class="method get">GET</a><code class="uri">/api/roles</code></h4><p>This endpoint will allow you to get the roles registered in the system</p>
</div></div><hr class="split"><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/roles</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
  "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>,
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>,
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">201</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>}
    ]
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-roles-resource-post" class="action post"><h4 class="action-heading"><div class="name">Create Role</div><a href="#users-api-roles-resource-post" class="method post">POST</a><code class="uri">/api/roles</code></h4><p>This endpoint will allow you to create a role in the system</p>
</div></div><hr class="split"><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/roles/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>}
    ]
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-roles-resource-get-1" class="action get"><h4 class="action-heading"><div class="name">Get single role</div><a href="#users-api-roles-resource-get-1" class="method get">GET</a><code class="uri">/api/roles/{id}</code></h4><p>This endpoint will allow you to get a single role</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/roles/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
  "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>,
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>,
    <span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>}
    ]
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-roles-resource-put" class="action put"><h4 class="action-heading"><div class="name">Update Role</div><a href="#users-api-roles-resource-put" class="method put">PUT</a><code class="uri">/api/roles/{id}</code></h4><p>This endpoint will allow you to update the role’s information, in this case the payload will have to contain all the entity to be updated.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method patch">PATCH</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/roles/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>},
      {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
      </span>}
    ]
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-roles-resource-patch" class="action patch"><h4 class="action-heading"><div class="name">Partial update Role</div><a href="#users-api-roles-resource-patch" class="method patch">PATCH</a><code class="uri">/api/roles/{id}</code></h4><p>This endpoint will allow you to update the role’s information, please note that the attributes are optional meaning you can send only one per request and only that field will be updated.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/roles/<span class="hljs-attribute" title="id">d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">204</span><span class="tab-button">422</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-roles-resource-delete" class="action delete"><h4 class="action-heading"><div class="name">Delete Role</div><a href="#users-api-roles-resource-delete" class="method delete">DELETE</a><code class="uri">/api/roles/{id}</code></h4><p>This endpoint will allow you to delete a role from the system</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>d4d42ea0-ee77-11e6-b823-6d63c6504afc</span></span></dd></dl></div></div></div><hr class="split"><div class="middle"><div id="users-api-permissions-resource" class="resource"><h3 class="resource-heading">Permissions resource <a href="#users-api-permissions-resource" class="permalink">&para;</a></h3><p>It requires your user to have permissions to fetch, create, update or delete roles in the system depending on the request you want to make</p>
</div></div><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/permissions</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
    </span>}
  ]</span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">30</span></span>,
      "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
      "<span class="hljs-attribute">per_page</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
      "<span class="hljs-attribute">current_page</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
      "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">previous</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/roles?page=1"</span></span>,
        "<span class="hljs-attribute">next</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/roles?page=2"</span></span>,
        "<span class="hljs-attribute">last</span>": <span class="hljs-value"><span class="hljs-string">"http://laravelapi.dev/api/roles?page=2"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}</span>,
    "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">total</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">count</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">per_page</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">current_page</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">total_pages</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
            </span>}</span>,
            "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
              "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">previous</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}</span>,
                "<span class="hljs-attribute">next</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}</span>,
                "<span class="hljs-attribute">last</span>": <span class="hljs-value">{
                  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
                </span>}
              </span>}
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-permissions-resource-get" class="action get"><h4 class="action-heading"><div class="name">List permissions</div><a href="#users-api-permissions-resource-get" class="method get">GET</a><code class="uri">/api/permissions</code></h4><p>This endpoint will allow you to get the roles registered in the system</p>
</div></div><hr class="split"><div class="middle"><div id="users-api-users-profile" class="resource"><h3 class="resource-heading">Users profile <a href="#users-api-users-profile" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/me</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">422</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-profile-get" class="action get"><h4 class="action-heading"><div class="name">Get logged in user profile</div><a href="#users-api-users-profile-get" class="method get">GET</a><code class="uri">/api/me</code></h4></div></div><hr class="split"><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/me</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"name"</span>,
    <span class="hljs-string">"email"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">422</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-profile-put" class="action put"><h4 class="action-heading"><div class="name">Full update logged in user profile</div><a href="#users-api-users-profile-put" class="method put">PUT</a><code class="uri">/api/me</code></h4></div></div><hr class="split"><div class="right"><div class="definition"><span class="method patch">PATCH</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/me</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">422</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-profile-patch" class="action patch"><h4 class="action-heading"><div class="name">Partial update logged in user profile</div><a href="#users-api-users-profile-patch" class="method patch">PATCH</a><code class="uri">/api/me</code></h4></div></div><hr class="split"><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/me/password</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">current_password</span>": <span class="hljs-value"><span class="hljs-string">"12345"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"123456789qq"</span></span>,
  "<span class="hljs-attribute">password_confirmation</span>": <span class="hljs-value"><span class="hljs-string">"123456789qq"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">current_password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password_confirmation</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"current_password"</span>,
    <span class="hljs-string">"password"</span>,
    <span class="hljs-string">"password_confirmation"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span><span class="tab-button">403</span><span class="tab-button">422</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"d4d42ea0-ee77-11e6-b823-6d63c6504afc"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Jhon Doe"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"email@example.com"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
    "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Guest"</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
          "<span class="hljs-attribute">permissions</span>": <span class="hljs-value">[
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>},
            {
              "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"01020af0-44b5-11e7-8001-41a6bfe4ef85"</span></span>,
              "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"List users"</span></span>,
              "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span></span>,
              "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2017-02-09T03:28:32+00:00"</span>
            </span>}
          ]
        </span>}
      ]
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">roles</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
            </span>}
          </span>}
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Forbidden"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="users-api-users-profile-put-1" class="action put"><h4 class="action-heading"><div class="name">Change logged in user password</div><a href="#users-api-users-profile-put-1" class="method put">PUT</a><code class="uri">/api/me/password</code></h4></div></div><hr class="split"><div class="middle"><section id="assets-api" class="resource-group"><h2 class="group-heading">Assets API <a href="#assets-api" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="assets-api-images" class="resource"><h3 class="resource-heading">Images <a href="#assets-api-images" class="permalink">&para;</a></h3><p>This endpoint will let you upload files to the API asset library.</p>
</div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/api/assets</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">image/jpeg</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s</span><br><span class="hljs-attribute">Content-Length</span>: <span class="hljs-string">1000000</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>iVBORw0KGgoAAAANSUhEUgAAAugAAAGWCAYAAAAqmna8AAAYNmlDQ1BJQ0MgUHJvZmlsZQAAWIWVeQk4Vd/X/z733MHlXvM8z/M8D5nnKfOsuK7pmjMTKaRQ0aRCyZRkigaShAwpkSFEA0qlVCpKmd6D6vt7v+<span class="hljs-comment">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<span class="hljs-label">XXXddfX+RCyPvvvuuvPTSSzJ58mQZOXKk+pSN0bvxNOFIlONSs36byhz0YvtFc6xWPEbjtttoI9lqq61ku+22k6232UYWL14sc7Cx/72582XeJ5/KJwsWyqcLF8kXeEt3yRdLZNnSZfJlAwrHjuNV+BJw7HApCN4fKYCnAdLMVQf5qaECxmw8lYRieEXhpZgWkUle1pFC8qIyUvik4abByD+15GV4pvGKYWG6UhlheVW3QI+Qn+HFsFBOnIc7hJHpNc4P02G8Ij1CzoGcmE9RXhzwPV1NbTO9mXklZdUeW8uyqeOlBichGU5DvX+xmjfcpGc5JWKZgTqeZWQHR5b/NyZCbszXCGJ4PndgLVoseJap6DGu8dBycUCM5BbFTwjzI9Xi51PnUk3FxziG/bnawS3kYfFS15L8aeMSoRStUZYqSwF9EXnGy1QpoENGDAvTYbwoj0B2jF9WPtqh0bA/cvzSwDgCU83bbyp1i9yYo7gNdQlN0j+JGw12xkr5hAkH4N8kmA4JIIjkRlQHjHHjdEAq9Z9+ZkQhOLqTlK4DEsYy4rQyj8tIOs1I/xPziNOkSoOlwYvhqeQUvRRO/hZJuZbkSdoSfI1dSZwK6I2PXUvpazi8Ui7vbSXlhwRRvDF0RkO5zeBsr4KVcsbDH53yVTAE8rQ/+plrr72OrLNma+zI2BA+ZxvptHEH2WSTjXXR9+mnn5ZXXnlFxowZ87WdAMN3vdJC88IzL9LQSjeodIrqoNxj3r17d+ndu7d07NhRFsABv2/YkzL5vVnyEZzyjz/+RPebV8fVYbPsjWiTjRGVSsOGsqLBGn7Mhx2nKHcWOkW2NeiYV7F0muxKYcV4NjU81Q5Fyl9MdlqZYtxQTiX4Mb2lY9o4bXip16BcpGMo1cZ0tdwzUmfAETgI2sdqm28jy6a96doK2wuePBEvcQLo3PtVPBKV0zXWKbSZE5r+txxfoyrFrygPb6fkRuD7helK3qVsmMgGn0rwDL/cNZRfCpcyQ9wwbfqE+aV4hXmkCXmFeXG8KH+zrbdpxXQBomvFOUAsK07nMAtjMa8Yw8ocw6tKW5mrIkpB1r7lNaZzznr2aK132ls+G363q3e1LR355S7X98lYjTBdjc1SNFvpoFi/OJ2mQGpbpW3CgqcRelgoI4yHJMXgIc6KxjlmWz2HvCqRnWqDgAl5lMSpxl4B30qjlZQhjVdj6UJePBRkObY9x4HHLaYFOu48CbANdmxs3KG9dNhwPdlk401ks802Q7qDvPrqq/IOVtdXdijmh1fxkujKU5HbWbbffns9meXLr5bLk6PHyqT3ZusbtyaVDe7/erCO9321Q2PKF9LYDe+73lLCMq1oXZtNOPDnOecc4JMAizFtMN/X8pz0BLcwYmNjVV20CiLagyG8B1i5StV1tXY0ObEsFR78ScNbEVkB66LRUCaRwnQYL8ogJcPo7JqConJCuxfgWD0yI4x7xFK8lcTjrYwLZRdzVGK94nSsT6n8OM/aZswjTDsa33r9qjn7qAX3PgLT/HmOzK9xK+zqqHsn3Wi+ddeU9rCiOsa2Vn4rQU6lehZrX+Xo09pIatlSGJXCK5WXwqrJQY21x4ooUvL+VIYxj2GcNWuW/l7Hijn3qm+22WbSs3sXLBR30hMCx7zxhowbNy5v/CnDtsmyK3bQeZtYGaENXvocOHCgfmTorXfel5kff67nVbKh5cn0N9vG6GB87NoYHiVp/A2iWEOpRG4x2lhuJbxCmlL4BXklbFyASyEp+Kl4oUIWT6FlVkKflh/DmA5pjHdwTfgFsDBakJ8mIxg4Q9qCeAotcaxuY1ml0nFeOVl5+KZHmt5pMOoYCaDOSR/0dg5RYnzmFcBMj5Awjsc4SDOYzfLQY9y8zFwibZAiV0xR8MeGRn/l9jj3P8eAsUCWUeQjuFQoS+1VxL5GqzpYwl9tK0Fov1BmSGO4JA3xI5ZJ0vgYbqivwYhseEZoeYRruWg9AxoSbIed0BXpQZJYhrFJrkSAjLy6BywsM3FpjwRWoFShXfL4JcJykbjeuGXEZLDIrvz5+JYK7WmwAjOxLVkmr9QZMF9cl2PlwCP6PFxFd5PpBmxxqeFLIdQP+DyxTHE9P8eo+N9Y1zidT5mvc2yDfNzCFPVKq28rW1pezIV1wHKqnkYYIrFteDuG4DhupMXKEOpiuDEPpkM8polrPJlHfRXo4a6eSecoQ95hHOh5IZYTZqoMAmIGIDI5zHZ6eX2sbXk48wtCgBPmldza7GXGqoT037U4j+aeOmWKTJ82TTp16iRdNu0g2267re5ff+2117724lTsoK8MzfhoYffdd5c111pbXp46U2bOmYs9P8uaXBT6sPaVJmf8HWeonbhIx/w2FC1NvzTYiuiaxi8NVqmMUrRxXql0nJcmP8QJ48RN0rYqTqDVNWDOL3W3Vn2FI8jHmS2gxzYX4NtgocO1hxE14c+ED43tZ+m8nOTYuSIuQwz3KhRc+OIdi61PD2gL/SkDFsL//PnS3MYDY3CgIw3PyeCLRmY2Mqcd3KBllrHhyaW9ek4mCNWJwtV4hNuNnLLgqGpQKrnn+LoyAmLEVFsFADO5AuYY6V9SKzrKSf2Nn8ZRPs2nPC9HB3ydtOTK6U698nqo7rQbpHDbk6fTi9oLbYVbouiqg4S6WB2pLGoAYA30Mb2coo6TOQCsAS2v1Q/5cG81mbLdaXkRVSaKrPhmT8pyuBpDVDmqTEejJdUjePnSpWPn7cgyUk8vA4zcNi/i6bsNtCLrhiIcf4qrJKThK4zlNF5WJrQ1ZyTPmQLtLW1Ea+pdv1SYfXtP+bj2a+xIHcuN08RZkVCOX7H8xHoocy10Z92wbtnmdPJBpYDEtlDPPLU7rsCtZztCNqEODYisHxYcv4I2om0AmGxHZOoDY+RR0wz25hVykgA+urWPV/JERkIJPOrMwPYQlpE8eI+hnlZnIFe9tC3qgRWop0gXx0sZav9yfNgOmIOg+LgqM1wph/pCDi8MTg7aKmQwoXoxE22nBk9caFdnZ1rT4xhfx8LZXhmSKRQnU734uBdmtlIZtK8vF2WbvTzLRl3y+JfhQNywDsqgV5XN9jhz5kz54IMPpFuXTrINnHS+bMqTXr7O0NzXcVmZqKYmDfy40K677ipt2m4kT457S96dMw/HJ7qvQDWpoK+RmTZQ35BDscXgMQ7T1kDDvDBeCa8VwQ9pw3gxuTE8Toc8mipejQziMpSzayndSslLy0uDFeMf44bpMF6MvhTc0QMDbTK3vSUYQHAHrq3FHB0elG5noa140yO+d9LplAlfGPV2LKeTZ5GoVQ7fEIvhEc4Q118xuPGzq3ZHDFINKGdNc5SlGa4Y3NwpGRiAcU4uB2T+nOPmB3oSwmEiHa/QAD/o4vWBUTSpchKYwyJMB3BczelgKQirAT/nMDITMAyUdG7xfWomcgxURw6w4UDMwdej1LmPr9XUUH9yBpwqko51htMLODg7IC4k5AosHRodyCGLgUS6bcLVu+oIHqoLs/GPH/+qabaKs4O3hbMVnCrygy7aRqgHeSOE+qjjAn1UL+9wQm3frqA/opRDO2s7JQ51YLtTnl5n2o/loCMEftTdtoKw6Ek71bICjzzAC1xpYZVTq3leR9Y56YinQVPaDtTxY7uoRdlQxhrE1Yn0mNVc2m64gWzUto2SsN2yvG+8OQHqO3maoXbNcdX+SKuw7fqXQ4mtbZcTBxYP9NYPmLZgMEunXUvjBMxAXBo3jXtxmOoMe2vZUYesG21z5miTlHaBPdzRrmwTSMMOzXi19gc09tl69gP0Heu7NIzio9045xF1iNqvJ46qxTZDfqhzysf9QNuT2ZK25pcmtZ+g3ZEf84CvzrnSggf419ejbXhTaT9tvorUrOL4gSlkOB3ql4Nn3VdSg1PmGmoQZ7siX5aBxWWZaBPem/SHtk05zK8DBnXi/YGBqMRhH2c/oK20bbIf0h60BWgA134HfaibsxtYMc/LZ9kYlIfaA3gEUTT46MQCOLpYQyD0VFyvOSevDWp/HGWNK+8F9bTbCoRK25rWidd/BcSVJKUuPKTk7YmTYZYa2QEHl9ShfNyX3tTB1XYhV7Smrz9wVYqntPTo0UNGvD5O3pk9F+eVl65Y1zBcA7P416/591+i3jjY6asIjaEh+zQ6whiqqeM0PsqkCf+U0quc/JA2DTcNZqqXyiNOyNtoKrmq8xbQk0aPnUTduxVUzyXlJmg6FZNtJNaMiuF5CRVdTGZFyKY6rm5wwmCG1Q9pvqrgFX+Na/uCojq4Y6BtWP6VDjY6qHOU4oCJAZeDuNC5x4CpK7p09eg06uqRdwYoD4NeGEDtHXHw8gZRmHcudXhGN9PFazq4dAQ5EHMc9iva8EicUxsZtEHvlSCm3nRESAIanYRw4Nay0qGm3hh0EdRxpkPBcuJXw+VIlJMfv+GkhbLoBNFd0gGcAy3lshJhgwbYrga203ZDlsjjgEzHA4cHgyd4C66Eg4dyN/mgbaDzQjleH9qZ+uvEhDK9g0Ld3QTR6UcZdI7VqaHzofpQX9YLLIryqgVoOOSrE404qenkNNDBBU0tHR4+HWE9wc6sQ/KFGyP6FULwYv1oAD3Lo3Zajie6NV9BVeCjbK58Ho32KRE6d9xMzvvVmdKtc6c8LD7VYbU9OvxJuefBx2T6u++5fOipjhdS2mc8e9dXWVfQ1+tAe6EweXyZULoAGqfTcAL0JommyVS5+EN717KNaptD+2wGm9MJrWH7MXsCxn6CCbXag3XOtG8/NjawLmvwsULts9pebeLi7FCPdlnDvoV2yS87Uy/2Y+cEQzbbM0704OTT+nc9+kbzWnz0kP2E7Zo29vXC+wGP79MJNtsRcfyElHrWrrqa+7G9J02pTmrxXl092lEDtk/UU986ZJKebZD60B5o97XQp3aV1VBu9lvAYA91gNHf6QAzUHfiJTjQjfewWvRD6qxfsKZOWk7oq/2OfYWWr4GDaX0uZyu9T7D/AQco4Id6gH46MWRDJT+Um/XWQD6UyXbIiQfKpWVathTaQj7Q3VMnq0tVu6I/xrccstW/4Vl7i+GW39gr7yUcE/ll+gkTJ2Gby6oyYOed9bjviRMnNpZtVXS401UY2EmaKGy8ySYyYMAAGT/jXbwMOkv45q1WZwkZSXUTpxGqGP0KVWIJ/cw0O/TdVvrt0NeSeh316miZhUnIbHxe1uS336itHHrg/vL+nDly30OPKt7BB+wrG+NrVzfdcbcsxNnuYSD+IQfuJy+/9rq8MnpMnglat2olPXt0V/QFeFt54pSpIaneYPIBuRTtYjol0GLlLAYnYak8Y5yGkwYL+BWtt2J0JivgwWhqOT1umoxS+J4sr8wxfpxWGq9zmrzQfjGtphOhPhKXH+mEb4Crg5KlOahrYB/yncjflHEnysE0izi4sXMgSVqbpyEPo0fU6UtgFAIc5qSWgxkeL01/ZpcKenPmwJuCxAGJA7twFQkDX++t8LGznj0AoyvG8omMnTRd3pw8Bf4BV80w4HKgZ4Ct6JTWYgDvtEl7ablGC6A3yPgp01EQyMPNm4P30fsOIhu5/aH/aj7p2J9+0H97XBvkyZe4b5GOHXnWyDH7763XO554Rnp17SS9unSUkWPflJnvvAPZGDw5GBKZuAfti6NlP5enRoEH0lt17Sy9uneS8RMm4zcJDgIkg0QdNzrX6vTA2cBAIqusLi1atZDOOD6MYf5HH8v8Dz509qCmdI6pk9oHNCjrMQfsLeMmT5Xxb4M3dUH51E6wwR67DBCuBKvDD+9jEU7ZIu50vDckzTAwf4UBGibUe4lvM8Stab6a4M0r/FaTzptuIi3x5FQFo5zjJ06Bjd2KHx2SPXbeUTbC9y5YVhp1EV7gmvbObJmGT3IvWYyTGbyz1HvzrtK7e1eVpRMMFpB5tB0KNXbSNBk3baYM3ml7abv+uoChvGTJ8vp6Y7sZ9tKrMv+Tz+TH++8FOwCBQhHmffixvIFVs3nzPoB9MWFY+iWymEcHiJMFykFQGK5auQpJ/gzot71cdsF5STotMmTPH0gvHCl84hnnyOIl0ckT7I/srriqPJUFHdg06ChxkuGDa1uWcmWwVNlriu5mB9JyWpCUk2nDt7IXExDmexptS5xYqSO6ivTdprf03WpLGT3+TXn1DRzz6vHoAG/Xp7dst3UvGT1hioxBO9kI76rtv/sArXOnX4NMmvm+frJ90ox3knrlJO3Uow5WPa+5+Q60STjGLAPqjPzp2NairQvuB81wgkcN+kmPLptJ65at2ErklbFvgQb1/eUX8KPRflHf2o7Rt2rQhrffto9s32tLuebWuwVnPLs+Cxvwic7Gm2wqQ4fsqZMPLSvgE6HbK2PHy0J8vbK+GeqYk260J9f9oBPrGf2r2ao4u3u1NfCDjN69wA9w6PvZZwtk0vRp7kkVNORk4mfHHQGHHv1dl9NF5qBfv4/twdRd+wHLCb4HDdpd2vPJDetC6wOWgH1gDOX9wJMvAF4rQwcNdPk2q0C+4qFPzZr/gTz41AvQaUuUu2ee/V8ZN0FeHTtW6vGByDpMBOq+XOLya+C0c2INSdUEbVthuylGDJw0XNSyL2cxwurhnEzzLHV+Y2f8WxNkvXXWlh/ssYd+i+ejjz+unmGVFJU76FUyLobOGcluu+2mN6TRGOw4O6k2wGauvVVL+DXg99u+r5x1+in5kk53ySuvuVau/scNmujQvp2cefrJQufdHPRDD9hPSL8mzue88LIr83go/mkny//+/Tp10C3zvF+dJYeAjjQWhj/9rJz9u/Ph5ON8aAQ25gIn3JBTrnYTroYmZMOOkto5UyquWt1COWG8qMwQqcp4mm55clLKU6WIBD2WVZAGZqpNPYcQX3UsdqPTFRDc/MksxvFpriViLdI5NEBT3l6OXQhjsDaSZooYh/iOqkxZiOhDWOawjJZv1zRZrgDgQMcVTiKd8+P22cNI9HrsXrvBSftUbn/8aRn+0it+IIR+uCl3gkN59jEHS+cOGyU0dOjOv/FfMgMTbg7eO8HJYP7ItybLzFlz4QhiAIYdTz3iQGkFB+DJMRMwZsKZgoE6dmgnx+43SKbPnid3Pveq9O7ZXY7Zc2fp32cLOf2Sv/pJgnOMyefYA4bohOCp1zHwohi9tughx+69u9wO/m9OmQaWGGg5EHKbC+6r1LkBgz2d85MPP0gG7bCNtGqxeqL7/c+MlOv+86BLL6f3x4EcDigcph37bgPdBkt/OEWnXnSlX5mE3tCDTx4G77SD9O7aMeFlkXF4d+i2R4fDqZ+oZeSjf61j/oEzQX1arb2unH38UTKgd08j0+u8jz+V2x55QkaMeh2OaHPZq4iMRXBeL7vzQRn5JmTADn222FyOG7xrHq+8BBzY8e/NlcH9t5M+cL6KhfHT35MPliyVH+0Hpyol/HfkaLn5gUdl7uw5UovyuK1EKB+dvRR8A3XuiJXzc860ZHJ9dNiT8siwEbqi/otTT1L4RjiH+fIL/yCnnv0bmBrOK+rW+ggRtF37folTnrEPG1sJQgTjTjqudqYEg9Jp1Nrx/Ngmk3sAor7mkrJZOoVlUZD1wwTB3yc0DaO5SRucS7Q5OuGnHDFUrkW7fR39R9szELmVZLute8upRw6V6+57TMa9O1c64IzqUw7eN2EbRp4ZPU7+cN0d+nEZ8jj1qEM0+x933UtXU/sp+wnLq1u14Gg3W72FbL55d7nwZydJj802TtjN+fAj+cUlV8tETNDY9vUJEepFV7dB85tTTpAeHTfBwuIceer5l7B6vNTxhYPaoUMHOQ3licOCxUvkdvSR2+59WD775COoAj20UlCXdPy5EADnfIstesqfzzxV+Yc8XsF2qGvuvEdGvz1ZcU8/qlAG8Sdisvy7v98ik3HlavhBe+4m2/XsGrLKi4+eNBN9u1ZOP+yAPHiYePWtSfLoyNdlR9wXTjsk3/6km/3BR/LXu+6T+x8frnZg39AnG5zEhnUfMl2BOMebgja2AvwqIaU8yv0CX65/DYsp7Qftpgeb3HvffQqvhEdjcdA6St1qArZNZOxNN91UenTvLv95YoR8hi+BVhOoahOpUY3Y6nC9Oel4j3pttNJugdVtrnDTcV+AjyzdjBXyUuGEY4+Sex98pHAl3BNZjf3i1BPleOAyvAxZL782Ro4/5kgZtPuucvlF58vJWJmpJFgDLIdbCq9UXjm+5fLNCQzx0uTxnme2CXEtnkZjeY2+skH6PhTyr1TnppBrPEL5CsMAo3pwxQ2ANNvo41rkcccD9+cW6I2yqeNAZ5ArNnpV7gV/AlMU5MWAPH2sU6fci/LwwIRlZCjQU6Epf5IJCZwCrlYhjJvxPn7vqT04oA8dsJ064m3WW1fu+O/TisOV3v/3i5/AyV5d5n36uczHryW+UNel3YZy2U9/JL++7i446fNkHFbx6KD3wmA/80N8VAa27tyhrTrnZLTV5j3kzekzdUWql3/KNX7mLEwY4DhzXzdC5/Zt5cA9d5WHnn3JPVbnflVdPkUmnTY4FKqs1x+jtDTQ+cUjeBdQeXQmiAvHh6v0Q3frr1ksJ0OnjTZUGB32y2+6U+3HstfX4jE4+A/eaTvFY1k6d+ooM2a+o9s8gKiP3/UKjOFj3tJVfballqutIkN33l6uOPNk+eWV12KF6W2UExMMOkX418BH9ZgYHTx4N3XO5+HjNSPfmiqdYcM266wpbddbR1f4R7wyTnFZBobhmJDQ5ix0r47tgd9G/njikXLKVTfLDHywDsuNiqf1CCdbHTtOgvhDGDftXeA4Z5fpYeSHiZWusMNRs9XnuYQRz4dbh7+g/YSDTGfYa+/+fWUAJk+HnX2+LIJjZfttWTaWUYO1XUJ8nNta+FQzDnPnzZexb74tU2e+Kz875UTd2UGcLrD30YcNlbvufShHQrtr4+fVyTL+CZJuSUJ5aLeoXzpS0No9gP3Y25d1maxWKzNg07knD8rSHxwtXFnSSkOBfmmE1IHtlKvYmJRp4FYotFv3BAQQ9FluJWHgtpKa1bGyjEknw5yPP5PHXh6jLazdumtJ1/ZtZLe+vdXRPeeaW1AE3qdcoFPNbUr6xIwFoWzw5Qr6mvjuyo1//I2s2bKFzMY3VuZ+9Km0xoS6+ybtFH78eRerk95QRx2hD1a2N8eWXDrnDAehvz77Kp5kQ1edsNHR5uQYYTZ4PYLJnQbYdbete8rphx8o22GC/aNzfo9+iy0vvq3alpVmuLf85uQfKv/X8ARo7kefSDv0j254erfDVj3l9tZrqo1YJgvXPvwkVKuR1quvJt02bivb9egif/nVaXL476+UxV8uhe2cDR+Cgz0XT4XUeUb/1P6C1fI5aP8d0LcY5mCy/NBL0Bl1bu2c8TkfYJWYdcE6Qxg9ebq8hqeOigdbHzN4oFxyxsk4P3x9uerG27HVBv0ffYx7tcFIab7rf7jVhS+IMnyMVfNRY8bJ/qj/l/Exo9mzZzdN8djfU4LvISk5KwHEDrwz9vDMw5dBp+HxYUUdOkUPlgWsbMxIwfjmQXTOr/r79YkivGG//crzcv7/nK3Od5JRJHL5n86XfQ49ukiuSCvwO/4Y55yf9PNfyohnn1dcrp4/fu9d6qRv3q1rUSe/KGNkVOz8lGJSRZ4OBEEDpfwQFsarYJuKWo5XnB+nU5kGQMPn1UIxexqu4ZVLG14lV5Mednt9zF+GWHUgDsdpXIw+gTMLZStepsJ+WQqfopoyUBaDtiFor3rSSYFza9shxsNpvfPJF91NBDffkeMmyrVnnyQH7tpP7njqJS30QbvvpM75uGnvyQW33yuLl2Kgx2B70IC+csr+e8hBu8Axvfe/QmebTmrnjdvpY3MOZr26dUmK1KtbZ3nz/Xm6F7bzxm4lXh10rup7J4TIxwzaRUZOnC4fYCAV7lf15dAJFHHZP8yhYVzLhIkXHAT8cWk4My1wXzhoV+ecn3/rvfIyeDK0WHUV+fuZx+uq+u2PPontLti+AVPxUXqLNdeS/lv20ElIm3XWkj133Faue98NPGpH6GkTueGj3xSuPOtLeXAy5mNgP/XAwTL0B7tgywpWHTnpgO7adugQwYns51fOz7nu3zL/cyzKcO/usi+lc5v1ZQ623ui+VjgA9oR92BsTZDy2tuAuIA1P1Un/Hp3lgh8OlbMP30dO+9ud6nCxTMS5/ZmX3dYkrG5xP6y2NdqLkwN/TxmGpxjjp7/r8pd+4eR7e+q2IDJDuHU47qG0O9oEnZQLf3KEDMBj/SG79JP/PDoMRQF/Pnlgp3DNTOnCPzv336Fgz7nlH3HwAdIHWwXabOicIsL5CL0Ov4P2HaIOehG2xkKvWhd0DLldoYCAbQP/6VChjLrfG3H3Ui36AGBql4QONvZl1nqjg4V6daugcLDoSCpuQpCniyWsvVraKZpPo7LpfJs+NuHkFW3M6ksnHNSfAfBmfl82k3Mxcbtx2AuIsd1jbza2Htzx25/KrltvIbtuv7U8N3YC0TTYnnF3GgwnsCg7HX70hWMP2Eed89Fwhs/+282y8Ev27zo5Yo8Bcs5RB8mxmOT+bsY7EEE96KCvLgf8YGflOwcO+O6YFKyJr1F+/unH2hf4JEptDYw5cK6vf2iYt2sdns4Nl/9c9BvZHn2sR9cuMmECJ7LLoD/uoyg766YVPkVPB342aE++8p/QBZNn7C6o+2KxbNu9o3Almy+0hu31hv8+qzaj7euwleecw/eTo/FE7tRD9pErcW/iPYLh0ZffkNFwquuxtYbbUHQSDfvWoo90aNdWcTjxueGxZ3QfO3Hq2Z9gD+JwW5DaG3/pnF/7wBPQnX2kTp56ZYzcd+m5chzs9Zfb/g2d3X1N7xvKuen+KE+21SKhXH4RsrJga9vWPqdhgj3vw49kl112kbvvvrss/YoguBqsiAPvSiv2WxMDQc+ePeUVnNqybDlnuo5fCZvnaWZ4djX6aq452jzWFSYqLT/Z5eNyuwlX1RncfnHmWzBcl34fj1S56s4V8rTAJtqzRzfd1sI96SOeeR4dBkD8JmJf6JBDjpYjfnyyrtbHelSSdjYynfKvpfLydc2nq0Su4ZSWEfLNl+hSYX518eJyYznV8bVyNebqdHLy3a0pkO3rPNYuPx3go03WYPWVK0q6FSNqowpTpwqbXGyADHCoS2yjHCwnNcZx5fZlcIXQRIH6jtCEJAxzeLmymNx0WZzgeTbw+rgOGK4F6lYFfQkQq0lwSGZiJXwsHLjWWC3fCg41V2i5N5zhjhHPyeJFcOrUcVkuDzz/qsJ7dcJKGmw5/t05mu7deVPdKsK97r0Qn/fZQv317rwJVr6wAo6VL+IwjH8HNLCzOb3zP18orbAK9svD9hWBI1DD1XWumjOwPuhw0qnxDicinp63b/wUB44EcDpv0kG3tYxDeUZh2wBXs1jGxdgzPuK18cqyFz7CYTrx2h9OI8Mdz7wq0+d+KP236g4HF44MVhobsMKushUDf8CvxvbqI/7gc3CQEXaCE04nRR1D6ortGGxn1K1L+43cU4gFi7Q1WX1MmzVPlsAxci+e5sqHVqpFZNm46jtq0gyV0QWr2jqpYXkR2C40oLJzq+iIw7mBYN9WGUMgMuHYXqAvtyHOSYbLJAICX77l5IFtA87vPU+PVPCArbdyZcHkg2V0ROCqCpB77jewfz+lCf9w5fwCbFm8Egs2c7Ew1c6f6BLitGjRUrbsuTlYgZfVs/FlefGjLbT/GjxQ3qkCWjp8qDuuUNeuivcmVm+JvdYtpXaNVlKr8VbSrEVrlwaM8WbMIww6NMOvBls5dD+0OsZYseW9ALLdDppcWQHMK3v5NNDZH1E+tmVrzxr3MihHX1Zn20FQZ55tEU4sAyUSh6vsOuEGn+fenESodN+4vSu7poAGGr4kTHw658qLbRT12BfOMMO19/9XFixYjFVt7pteLncNe1bh223RHfazfeG4YgV/t2176UrzlffBQUXYfce+2kf4ngVt3mA6Qkm+oMqXJ/mUa+HCxfLQC6OU5gd4L0K3tagefuIL/TbvuJnmj56Mtm717/cyvYZ9+OxXSsd7gQ+66ABa1y5q5ZmxZod2zg6ejz450Rsi2jsnX+i3OvFCUm1pDHklHtq+OvHA5V5yt3VKW5g67dzWw7LxxdfJ77wnr749RdbE+y479N4KTQVP5Pw9A8wpoOQvuU+XwSMf4pbiVy6/FG25PB6Xa4Hbsl+HD7vlFltiobR1SZ3K8c3lG/f8a6628+GFKe0ZheBqIN26d9NHH9PmznN6VUPscdmZbUazOV6a2hF71dbCqlFaeHvqNHn5jXGyEEflrHBgY6/IBrmKDPHDFzkn4KU0OtgarP0y4flfcOkVcuVF58sJWCHnVpfZtFeRQAfd6Axl4tSpFk3yMCwlN8RcZhCLylYSP8INuCTRovRFaNPwQ1gYNyG0dMwuHw8YdrMzIlzzcYIMi8ZMDe6vhfQ5OTbo5JEE/ApogzzSFOTnMUIiwo+z2TfydCB+8Ev4ez46OLJtqDMVcSMO73pGH2QnfDxM68LzJKgTHMVtsOe7lb4UGBD66LR335exeDN+cfxZZneXLSQgJOAfIlAXWi6v3IpvzgBpmU88BKy81SzHC1686UIeHYbx09+RPnCg1RHQFSOHOh57rDmgJc2IjgRCm7XXVCdhybLl6tR23mgDLetiLDz02qyDjJoMOvwb1LsHtm80kxbYDsLV6elzP8Bq/Jf0PKCS02f4+MnSC4/We3fsIP227A7HGgOyfzyscuFcMJhDr8owA/8bWCb6b8jnSqENuOOnvYOBFs6mL3Jou7YbrKcTBrUHyjNo+95kLy9NfQdfzltdTt1rZ0xUOuHl2emOzJdZkeDY6tYavx2Ck7pxkNW7y2ZqDz0NBouwLLs++gfeoiVfSluU/ZQhA+V+PEafjxVIqqormoyw7alDxlIg+At5gIn0hj0ZpmHyoMHnkwkdc74LwImDOh0g5j8WnKwZaAIetUdcvhzLLS66V54ySeuDrmryZAr+A3zc5GmWBf3gINEpRPWrgwlepmcOSZLjFEMY47vu1E9+9YeL5PERT8uQQXvE2ZrecIP1RSZhUoVAxxLSnE3ZRoPyaD7zgvIxoX1YJ1Z0QvmCM0/7oHPbHC/fri9dOrSTbtjCZOZTQZQFVlNmzZGp78/G1gqsCNO5xESlFg6YntDBbSK67Yq4pfffG88CIUkGNEXF6Mqxb9d6egj7A+3OsrJegrLxARHbiga9QGEtPuu0QbZh20OYgndAtDCa4h8gg9YaAttqLZ4YqWzfOF7nC9GcuHn2OhkBSTv0EW79Yjtg29xuy82lPV44vvvZV+T5idNkIdr0AQP7ySPPj0ITwl5y6KftjmJxX1G7gdZOxBrNyTL20FOsroJrGb1Q2HTBIvcp+gN26iuvo989i61kC+AI85SbGjY6OuKYALiz2ynEBbWZ7rRvkL7dN1PgZL4LQwP5wDjrjbpQV3W+IZovlxNugRQOj44533Xw91TawPAQb+DLsbwPqN1q5DXsjd9+i25qA768KtQZ9rBz641/yavZvyRSfmbBWJef3aSp0J5kPAOHm9TBFt2wS4FfGl1ZAQ56ZZbRm8UKatFryy1l9qxZshh7sHSlpRH8OuBt7uMPP1gO3XsvWbN1umMesx32/Ity7+N4GelFtyKSV2L2GN6hKgh5dGXw+223LSx7UoI16Ae7ylp4kXPYU8/oyywhrzBOgoU4iYUvg/4B22Gu+NP5cuTxpyS1RFz3i6lE7r7x2kQeI/fidJj7H3ksgRVSJFlqg9jBKYpvHTcgt2hRGkOokjaPXxHaPByTY9cqaWIbGJuSMoCU5KfJi2FhOoybsBRYyN8GHEPnNcmP4tq2wS+k4Y0tTMf0CQ0zGKiPi+X9jWFt8OGxw/YeJHvjxI9W2NtZSaCT/sTzL8mwF17KR0+xQUE/9YOsEZa8YaPIWm4g6wksWCXloEMnXR0Gv0KiJcVgmBQYA5WuqkKWltf5504k6AnlVgs66L2wWv7BgiVYDV9VxgFGAjrodNhbrOIIx88EXAc83PI5wDGgrNcPe0muOelQ+eWBg+S4d2bJF1/AiWcW/1AfGyCZ9oNvYn/uDcGA786NVgTliaMH9Kq3OP7xZWTd87E1Hc0NsRe3N54GjMQq9ZJldfgmxWR10PfcbmvsnX/P8QHLRBbtAceBALUdVw3ZnhD419qWnizDcsIh/n+33SMXnHIs9vr31R9xx8Kp54u2/3hgGHhBH+rnwyBsV+iFyQodBE6ODtrZ7Y/n3nTWhTpUwD1utx30Z3S83vrIMLnt8WeoXAK+8sTDkrhFzrjsGryH8G7OJsyAY6ovBWqbMExVT+cP9XSS8I92diXO4VjbykFyMZ6BzieouRLm8sJYGzjRxCFvw7Wr4cVpYhKmE0s44rpHGau93NPdGvuW98GLsodj69ZG665tLEpeuS//38+Mkkdwws3ihZ9LHVZEuR2p7iuUm8dosv61vmMLRGx9m1Coj2s/I4DpMB8gloJOkDYD90dJtWyar0md6J2w10AkwAP9h3vQt+3WEdtKPsU2jmmo9tyEixRGz5rTBP44izl+fDLG1W7Nhlx9+uCzkhVrOPX74YQhhsewxYu+yyOvjpOjdt0BT0M2lLnzPwI9dPeTCDq5XJEn76Q/WF93SgAXq/pkCH1p08k4MOP2R4brS+R/PP5wgZMjC3By0WQsZDz07Eh5+EW8wE4HPZgsnzhkV3LQftgaCwBHY5scw8Mv4tQnvb+pBLnhzBMUHv457tw/yZip72gfI7wvbPjGdX8OUeSV8W/Lj393setvXn91zOmgs4zsJygHXHFHBxNzPsRjS83KtH8loRwe205qH0M7KkdbifxSOCrX5GjbFLwwulS404GnML3RJA56eima276/UgoyzxafyuGVyu/YEXupRo/GbDg3ylEt14xKUYq0h2P+hzN+KoMx+IeBL11ypTwOdN636NpFwaTh732sRP/x6r+po55ujphLlOZNxVdQlFOQ5Gks/IXhngcflgsuuSK9oYWIiN98579k8A92lR236ys/PvoI4ap7fii02o6YFITh5dFYXQ8CG1o4EAZZ34pok+kX1VM1fLUzwhpl7VRCRiU8Qp3CuFVEDGNtJ202km00ds3JN0jKNeKhNIAVK3eSH7AyHdusv578/LijZGecBFJt6IOXKPn70dAD5N4nhst9w55MWOTKkZQ8ydNIVAbCytIQxyzJ7oxBNUk7BvwbBMjmwE1I3PfhPHIw4rYQhs5tN5A26y7X+Cju/SbR/rvLVlgdx7Cl8Ol8yVEdZa5QORg/ljQDH2q7HSe7HDtwezl76GD5478fV3x7fJ3X26kH5Opqn7+X6mPscGJB4e6/8qFddLWdKeC5jwbVyk69sJ0FYSROdKAlFuNjcSMnzpCdtugqV8Lh40DMe38iHzzdCjKspg4JAHFgvegAjgw4Ci/hpaqTLv5MuFWEL6G2wct9PF2FP66WXvvwU7qNx54QDNqmZx5HHrd46xPPygN4iVbLTP4IY7H/X58U0MnBai8fzY+Fo6OOnschnr4kir3y6jBxCwvqbR5eDMwViliWRHnUywCXpNAunxhatCjD2hyxxox7U7bBo/44PPeS2+LAoz6LhfnY1xqLVFFF5Cku2ybagDqTeCG3dlUeHbiaDMGJOL8Yurdu2wrljcHWp7Swjd9+RUf+jIP3lhOG7CZX3fe4PAbHsA4OKs+R1/ph/XMLEHSymg/LT95xOpTn2qArZQ4PDh1XXnHWvAaWJ+xrBPusdtDvxL0Hhixl9MSpcsW/HpaFn3+utkgyfR9RpxZtmTbSl08JN4aUw/96tRI5Du6scdfPdtt6S32pcir7OnAf9w76btv1kX8Nf06dVe2TXjjZUeWkHFEdKhphuBfQQecTi0v/eZu8hiMlN+/cEfvRu8tGWLHfrmc3/S3+qk6exbGG4QTi5H1299LcZTZe6Lzsjvtl8rQZOkGzBvzwqDEye/6HWm/1fHKIfjLnA0wqgsAJzsN4ukVd3NnmX+kRi3l2Ir7fosQrbzc0nq8aJqoOZp9cW6iaxddCoPqhUkN96aD3a8SYl6ZwMT8ch+xUFnLdsTL8NKz1sMI2SxtGfkdIww1hPz50qJx5wo9kLb9iTqf8f2+6VYZj5W32fAx4JcKeA/rLIUMGq4O+Mc4Sv+GSi+Sex4fJhVdf47a+aOuqQJ8Erxyuy//PAw/rCrappueTY3+4C+V4OKw/XnKlPH7fXXLGaSfrsYk5WtKHPFy8Y6/tFYV718/Q/esxHrNDOkUP/sR5cTpALRoNaGgz3qmiwPuSNfQoC8l8/BjXpWOqfBqXG8Py0+l8cnzZIUMdtSiRbrGupdKUx5DHM7CD0ydfR0dR5G9UAM8eGhoPXiv9UUaI62Uq05Af7s+RXQ4evKccf8iBOEe4shVzz7ng0harhz/FiUQDcMO75Nob8fLhx14nysy3Wx4xdczT0+WSRsE+39nF3+0wQOuHd7wTyTrh428GLW2y2gUAB3a2YWvHHo+4XE3i8MSXThl6bdpOFuFlUjrstnVn+ryPsIKOPaFUCGH89FkkVDvaah9Xouj0PPjSG7InVtz746WwrTbtoPhKRYeCHw9x2uECBwYrpLoCT2ef22Gw0ql71bnnloHOM/eQe7mkVSeeeSwL8Jk+ECeVMPAJgG7bUQM06Auye27XGx+Sw6o1gy93A+0B2VoprmIcP+KosmQAq+jzbfQh6gc7zXx/jsyYh+0TPOkCPNqs3VouP+VoOXjnHeS6x55X/ioa1H9/9BmZzsf0cBYEK5Fz538gH+IcaXVOsGVDn0AAbzxO47nt6VF6Bns9t0pxZZ/l5j5xtYPjqC+JYqsS98424KU7XYVneaCLfbAL7Fy5sErJ+qAMrg5a4MKswlFILbavC2df0xzbLHBiT1qYOn2Gmmfb3r3SshU24513i+R5/hDsqpOtjjDUKVXkvl/WCfZMt1prbbnmzBOlG/b9MyzEk5j/PP8yXp6cKNMwCdQVW60nzdZ6tPbfFZOnffptI4fvsoM69ucdM1QOx2lAp155PZzfT7FlgcevQi7p6chx8qZsvH6epbukwEDnviDLJuFXXYmMLRG6Z55tmPblDMm3N2a7+nD4U/C+yJX/eQwOrXMkG/Ay42hsU7EPDvG7BRbUJqvhvkRZ5Me2wTrH0yPtA0Bkm9IvhFr/DupcP2AE+L7YdtIaW7946slP9hyg7Fl2bnM5eo9d5F/PvCK1bC/YVsTAdsM96w3NuTpOY6G20ObzAsAuB/hQj2Wsx/a4p/HS5fN4af36R55CM24mO+Pdjguxmn70XrvKc9z6Fixunnj5DaDDdiS+TAo7TJw2HdvnlmOShjKRuUoQeWQUXhLFtxPqeLb7Euy3x2SANuAWHmvjLNv1fEmUT0vQR/ijTtrndOXe9QVuseEkUO85SRW6PHXeKZb9R0NKG/A54SXuQ2Gexa3dW/rrvGr/gALJ/RPCCZuDxZYN+N0G3wtWRCdvwQIWUaspyM8BKrN1Dj8lxpNH9EaLwlkVpqDlgS7/7a/k0CF7KexzdcxvkVvufSCHU0avES+NFP64An/5ub+Sflv3Ab/B0rNrZzniZ2fJomr2p7ODVxhm8cMBr4/Jxw7IKyn/hClT9CSYM047SX7/61/meAV8DjlgX7n6un/m8jTmuHNSELcd3v4Y1OnQWO4P80J4nM6xqpt9AABAAElEQVRhWtcvYA8O+TwSTLsBGpOgDAbSawq8kGceRYpM5qOcgcw0HrREiriEeeyMFvJwtjQ5zGcwGxbiM1NRkj8hThgnQqyfl5ZjwbtWUEZlavxxTfgpjNTEx8V+iuG5ehhpiKdsCdM7Y0Crua6Of3PyCTJkoBuwAG6SwNX0f158gZxx0aUy/f1ZCU+nF4tLpaKgICsHEmYXPnbm8q/+QGOk6Mc6SBPEwRv4vbtsqkzVaeY+ZS/iB9v3kafwteMGrhiBD49aZJg+GwsDdFJA/gEmE/PhQHJbxiI8+nwQA6IOgsAbOWGaHLu7ezzOoxrnf4yVKzgXGMVA70c4DLL8OMqiRcvl8vuGyeUnYKvLAbtRjNYDdXF1qSAtB48wbKiDM0LnvA4TDm41gWNg9tkTp0zcMeJFT0AS6N4CAyuCrvjDFh3hlLfFcYcMB+1Q6Dj2xxnKI8a8rfk522EogVOjgyoLj6D7z3F1j72hD2xKW9mKq9MedeGtyir84PNFepzicXvshK1BG+tpOKwHhmnvz3YfhMJe/YZldLyxBYGOE51QdZ693RSb3MFQHXPggLkOpOqh+Fr09U/b6F5mxYW9NO2Z8KLOPyY/0IPtIGkTWgGUyVrwbYopbWckRPC6jxmHj9JgO0vrVi0d3P8dDThD184dPST/wo+gzHzvfdWJOV5zVlwu+HiSBwdOV8/paME579ppM7nm5yfocYHmmP/rqZEY4zAOoDz2opu2EVaC6gzHUMvXIFNmzJAp774r/3x0hPxk3z3VUe+GI0AfvOhXctpVN8jkGdNVF+xkdnaA88lTaMiqIBgstBGQaL96tNlm+Nl3Orrh5c5afEzMm1Dtv9EG6yhLniHObUc6WQNkIdLcN16PbRY8baTuC7x4zAIs59OD1dAOcproCjifKtTDWda2CudSJ9w5pH2xj/wxbOdxhmYfcQsNk96f6xihrQzsvbnGu+P4VP7CQMe9G05nmgJ8/SoqMzEZ4PGifI+EDjrb0nZ4t4SBTq9+oRN5evNI7k1aCdpHdOKj1VOjzvpkvEzdt3tn1zaCic1otBlOOuu+WCJfLVmkk3xOShrqYQfooBMbJ1Rl63YU9CPeK9TRDypO2xTrTH/4QxzMHPiUTJ14w8UEQSdBPGwA9y/qmpSNNvb3U9dPVGzJP3l9qCTmtyATZrH7K/X+CPf8Vq1bO5utJPV4RwPr8r/yGOW5rIJGuwQzPQbjF8YNZtdDsJ/VnHNuYzniZ2fKLffcn6Nlj8bP8Hn9/c9Ok3/95Qr9HbKX+8of4XOw0n4UjiO8CivvDNz+8oefn67xSv+EckrFyY/tuRQO8xhinBh20x134Sukc4QfKgrDhMmTcUrLQoVzC4zx4dGKPAudwb44anmNucb2rYRHqGcSj+qpGN9K4OQZ60G6OMQ4TZGOZTBdim9cnjhN2jSY8UzjT5gFw7Orwe2qN0BL8OrrwUAqHwmjt6vl512DOtxr5/5N7pybLL5Y+j9w/tUZjuq1oDxGZFePn5SDaXXq/IAIPAw5GMgxAHGwxm+rrpvpCSt0at7EFgmu2r6JFVeG4wbtgkEbJ1vAIcYfOeWAQQqfjv3T3JuLL63plwF5HCMDT2MZBx41mrdUxk+doXD+Gcc93dxDzRfueMXArQHXGjgcNVjhemvyNHlpwlRpy5dQEXSQxUQg/oKlOhoYjPUECa4KeseDEweWoy22kRyIoyCtjJ2xorrntm7rhX5kCTwH9emhMh54cbScc/3dcjZ+er32Tuj6rvTv2UWPZ9TVf9+96PySp8rHSrV9MOhFPn7H1hF1ztUZouPGWhC54PTj/UeOHBPWIc9Q5wSAgUc12oqsArhdhcfBLcXPruqsYwWceYnd4ECAF30cOiTu52Syzn1TAG8gqGiOFZzE8Md2gJ9TScWqI6JtAsfe4YnQoThqk+HFN95UmfxsPCd0KoFykWc/RcQfnpbzz9vvsmRy5UuixL367zfIjbffncAtcv0tdyS8Qp4W55WBV2iPosJR8ivnPAKwNVbOLz3xGHXOp6IN/PSvN8uN2NO86POPcWQejs3ji8lw5lgGNYwZh1c6wGjz9bA3cRfgvPqr/v2Q/Bof5GJb4ulGl558rKy11rrudBc4ws04maEO1MXrZXwtbTpT7ySw7jhBxe/ZV15Xh3sbOJ/bdu8Knm4LykY4U3tgny1lAT5Q9ezosdrP6JAz8KlRPRxSPgmph3PeAHtT5wYcn8mXF9l3LejkBX2Dp7HolzrZX1C/rPzXsS2G4ZQD98JkqjX6EfoQTh85+8gDFT4VLwHy/YmWmATtCgd9IXQ58bJrc79L/y5/+Kerx/127KO4ep8BtZafDi5W1Dnx2KjNBrK/38P+9ChMBnhaEMqR3MtAwC9+/uW8s7CtZT3HAdXCSW43Pyng0Y1ui1aufHVfLpblixfJcjrn+NEe9YDVqy1Q30kd5ya0dLj1lByrHI/DpD3Rc/0DENQvbaUohgew2gpl45Wn4WyPbTgLFi2R17C9S7fIYMHB+gn5NvWPCjU1z3L8+N4Jf4bH+NKly2RVPrFpAn2KWelr3YOOukL/QQPjI5IgsKHazdzAO/TpLVec+z+a5N7xI356ZnIaSxq+0dEB/9dfr8QKeRec8IKOg3DfE8MtW66++TY9fvD3vzhdt74w45yLL0vyS0VKyS2gC278BXlVALjKcPbvLpB/3XxdHhXhN+FGr6vrvzpLBu02UPNtHzo/hjRpirsJ5RGWSVRaRjbUooGdGQ24XKhUVjk+SX4kN+Qfty+jYTWV0jTkoTSUwVCifAU0jiL5WyqfeQyhvqV0LMCPbGBCVaYlVvDaZ/Pucm6RI0Bj1jff96Dccv9DeeV59o6bYrSCdBd8xfOis34mZ/7J982gXFZmEoV2MiYG0xVbOIt2ZrcNWHv23Upf6FR88LXjD6+7/3F1tnHHlfufehEvJ+JT8XB0/37G8XpGOJ1vfjSHp5I88PQL6vBobWEgGz9pqgwCX+a9iX2kNti9ibPBCeMHgohDx11ftOIKmjmadFjogNJxhLN0BfaR9jrvF+oYKQ4cD6w7ajmo857bbKUvdmqdQn9njwYZ8eobepTig8+/IscOHiin7reH9MfpCgz8UBEdreGvjRPudaYt+m3eRfPuR1k+wDnIDLrSiLwRrVuoXfr36IhVdL/NBfmngOdiv8jSCh9v6YyX9Fi+2/FypnvBkg4gHAI1TI388KB9ZSfsPeePXx3VfoO+YzafBmeSW1iUhhMphqUoLyYrDdySQseSjn8z/BDodJltB22Ll0k74WVSwHW7j04MamTYy2NkGMrplZBT98WXq6mz8odudN5BdM29j2PvP56E+HDFqcdqjF2bTxbarrsOTjaZI/99biScKkzE4NzqSq7p6enC9sj4v9Heu3bqKPsO3sNYy+9xj+aPK84k59XC5X/9O1bPMXnz95RcjmHkrpoHPF0NhfPHT9W3Wmst+cvPTtAXQfmS50//eqMswH5sPW0DNuSJHCDQLTy6IgpHeEg/9+Lt46Ne87bjy5LLdMLS0IyTx6/kudfH6geebj3nFOHe72vOPElOveJaWYi2yy0q3NbBcrA+0u6hoV1YAm1bnOCgPnkS0Jy5c+XuJ56Wk3C6yT8g43UeMYiGsy1XixGuuPN+mTt3DvhDhm9zXLWtozOKflTPLRtwzhmwLowiosfTYfLhH2efCpNSPzjD+Ln2UCMnX3iF3IkPkh2Jrwi3wz7vu84/U18y5Wo4j2rkxOBO6FWHtjfQn3DEr5W+9sZYFkK5u1XuWjkJE/aBfXrK/7v9Pmdn5PKknOt/darTAvjdNm6nZ64/+PSLMmnqdKlDf+YRhdq3+dQL2l/8q5/rMYXb4x2Fye/O0vpthSdePTZpr3wefvFV3caCBuj44m8dnPM69BU65ctpBz6R07ZZoy/3Kn/g8fhWTjD40I70rBc2tUtuvQdJx687+vH1vzxRy6f15u01CV8lvQwveVtd7o+PuvXFB5E0gM92m3fV6MX4SBHLxK167K+G7xAL/zod0I6hSDncQuqvHxLrSL3rUFYba1ZUoybYg76iKrDu8W4/O2gZVq1btpQbLr5Qsbjf/KTfnJc45yFpmnF4pCK3rrx4z116ysvl5/5aSUIn/eZ771cHnnvT+Rv+wovJCS8h/29LnFtlhj/9rH58KNTp6mtv0DIecuB+eJl0W83iqvpV/7hBbr3r3yFqXjzNbnkIUcI6Uwi2QaRcXRpNtTKNrtiV8iuRbbqHHaypdUnT0eSm5a1UGO+8/ME6Wk46NBRoK4wcxFQBy+fKI/C5hYA4CM4ZxE5QpN2NA33WO0Yt8FW/i876uQ7MXEVYmYHbXX540P5yK97nKBa0XjngBAhW11p+5HG/aq0OHBg8EHjkH38W6DgOGzVanhz5qnM2QLMYzsrZV10vZx97KI6n2yjBn/fJp/KHf9wmM7lfGE6MBux3Hjthoka5es6VLNzsNM1tHuMB648vUo6biEfz/FAO9WU+HScGODi6Gs/oV7V4UXOZ3PHYk/jgyL4AwLnAyiYrTQc/4HDSwF8cxuF4Nm4HueOxEULneU9sz+EJLRbuf3aUXHf/Yzoo98MHeNqutzY+0vS2zJ9DJwhOFnTyauOeOFJOGbqXDMX+2xGwjQ32/JKqBTrmY/GE4B9YbZ0+4x1dha2BnXXQR7nJ79b7H9FtP0P33M2vojvqRXAYXho/Ue6D08JVcpbTZHC7j66eczVUHWM4g9SN7ZMwb7e2cBr5i8NYtQPx6JFgWwmcj7TQalVsq6Cj5MPWfpsTk/Owqv/CG2/Jn/95uyzG/mt7cY4OEP9Ze7O2RpowftHlV8nzI0fJmaeepEcvmkNuzjkX9adgX/rvL75cPoBTzT7otgRh1ZIB/TTpl2wDbE60KcB6BCPP0caKcC3640+H7osv3LaVz2HTX994N5zzz3TFnG2KbZ/Kcj8zv6DJs9CH4GSX3x2xn4rhKuhjI1+D74atIniqo5Ms2LcOq8e1mPBMnvmOXHjXg3LeUQdiX3tbOeuIA+TCm7FyTCeMzh3Hc52Q0ekr7WypzYDLSY5OBpY2kzsfxKQYZTty793hmHdSnbit5S440Hc+9Li2CTrXdcvQRhB4TKauEnPiwUkt2wO3beBaj3tUTTO30k7cvj0cP8bDQNkLPv1EfnLB5fLHU38sPXDKUjt8RZhhzocfyxmX/12m4GM07BNH7rmLwm9/4FFZvuhzVrLWs5YF/f72h/8r/3PCMbILXqpeBGeZoXXLNdyWFE3h5Ew4uQ+hnV9y3c1wqDnxpCNLJxa2QxPl9fTz/iw/P/4Y/aIwXwy1MBvv7D2Difc1/34QDvlC6MSG4AL3k+uecU5occ/QCRDbCFbvWfduUiKJk290dm29enOtB6b5DhG/RFoQIE6PjGRdI7THCj9/FvgBpQeefFbu/+8I1AfqBH2XZ6dDuKE0+fXrGL9N6bBPExbKtj5tuCtydSNvIYeajdq1y9V4YX4CqQgpwU6P3H7bbfKTs86RmjWxv0zvNI4rCxoW/DxsUznhsIOVyd4/OlEm4kYWB+0gMTBIb965E1bS/1cdWDr53B4T87nuz3+UQTvvhMczi2QAvtpZ7rz0OgzODKGugciCaDkdK+JDO5UJxfhUCzcxaXSltEjD1/o1hv6ahpcGI3oaPNYhDacSuRXxCXSvRE4aTggL41Y+dv4QHsYVJ9AhLR2XVemtvcCZ0Uf2GLQUj2l9fI9bAXGY5hWDW+u9jpSFI/6DD5RgfzVhHDg4anIw0huzj2PA+ulRh8lhQwapZpU46DdhBf1WrChaoMxKVtANfxEeYf/kt+f7l0YNiiv1tMAj7NSJybcnkNx+Sz5u5kdX8KjbvSSGVTYtJxigrLoqinJy3zhX4lhunbDwMb7aDI4ceIGbw4UTzG0B6lizDkGlezY5MKrdvP3InnLM1tBR5QGu9kUeJz46mHn9ie/qqZm+lGc21nsk6sp9DIgHm/lbegNXrFAG72CrSSgTurhH1A5P7QMcdYJZr7YSxzgfubOEdD6x4siSKi23A+ClMCik/PJepKX52TbgbOnKMp0OOAk1dKBQFmbTds7eeBzOlU06lSiDmogDuLeH8mE9wOxgplsAnKPIOO0MXNYhy+TrkSultJPp5PRw9oVxwYd1D3nUnyWCQsqfzj1k1cNmXF2FUsBjXwBvIiGoGpTLsvFK52c5nQ9X546RoiJK7MK4QpDXEo4PP17UFsfxMfBdBlK88PJrMp2TPNYp7QTZsYO+9n7HyefPPQB1US6lZd3gh+0F3C/Pz8/3xufnr8LKP9vJubf8R14cMxZbHui4YSLINg1h3A/dbHV8lKhlaxkyoJ+ce7Drv8oUf/6E9x4ew3nedUsW6J5uPececujQ16y2hn7I6IzD9pPDB+6oJKddfaOMfutNqaccTK7owPHT9c56LCMmxZ+6JzImQ69qK2BpXfoJBsrAiQY/iqWOJXB4z9H6R7usQx1YX2HN0BZ6igz6H1+O1Ekrt23wBVO2CbSPZmvgA02M68vCkAfdHA3twXYHXdEnXRtHu0Id4A/Yu3ah+KTBz+lNErYHpK0uWA+cEEB3LQ/7uLY3yjUy1JbqC/tw4grntQ7vqNCp1vsq7YG2pxMnbBtifdY2hz3whEP1ox1VJvXGj3ZBH+U9VCcqtDtOXdLJid6PkIdyKz/y4gencM9TvVg8iHM82AdYWyyDu9/wxVzXH1hWJwtCHBEwte+xvPw5UmTjCQpxqQcmS/pUA3XCE2n0fuTMkPqXfWBFQ9j3VpRXMfpQxhpr4IQkFJ7FZ+C2w2v/91I58qijFO6gjftrPGNq3BkqC8UYVEbtsMjDfiFdCOPLnOacc7vKJDjnoeyDsa+cq96VBDrePG6RPzrrdNLJz8I5f7pUdvQr7cfjpJi/3HK7ZaVeTQ+7piJFwGpwI1JNVkSPnqfOVsygBJyoqTSEx3x8uhg8DT0VN0WfVDwyTMEluCg+MxFS8yNeBTjIhzEcg0r/RjzT9M3jmIYf6xvh5NGn6RXpzZtJWKcxvaY9jcUNx67uLh7dPkmD0BaPg/leSDWBfBPeJPS8KuXB/eg8gvHSG27KI8nj6fnGsjCc601UcWuw0sYBZ7lzupP6ps04EOtAiEGUOAg6aNM54CBPB04dYjh16gxjgNN9pMj3pavBJ8HVwYJMfczsB+kaDoQcUMlTOXvnlXE6a8SjSJPLdsjBnAMnHQcQKgtKIh86uPQA6BAwTYcBg7c6MYjzqh96IT4cIS64EY8OFJ0LstcJCRVigFw6787xoDASgD8HYjqO0IOoPJZRJxMsRECLEVodWTrSbg+600XbIfJqlnt6yqjFwA0F1C9meQFTJ4hXaxeEM251grTVo/oUdJiRz73U7oM2zg62aqfl1zJATxZWy0IdaEtwIj/ai2L4j2UhnjppLBzRnHx1orjSqav4qGvopH3McHBVcygTFyc9g5VnMVaDHx/xlMpQmK83dQ4davLXSU+SScTgKkvrBWXmfm04h+fAcWb47+jx8uJYOM1wlNxec+qKYukqO74QCud8Hzjnv42cc9Kee7AbTx974WXVu76BLxz6jxXBNvVo/1fjyMWtu2ymq+i/O/ZgOfh3U3BKCeq8OSZlqIta1i/sacF0trRewSuxLW3OrVusD7R3XfnWSRK40M50/NgPGE/4ggYitP0CrpNOALQua9jWkIdC14On2yeNOucEDGm2Jx4vqO2NhsFP+xfsqZMk1IvqwnIQV6/aQsADV+ijH+/hJJYy8U/7IlaN+XSC9alfX+YkkmUjBsurch0tJ7D69MfLoE2gNgLKyaJRd5z8om2DLKgmJrzaDkGjzj51Z2CZYHd3H6ItvF60G+51DctQb6RH27VJvRabsklL5u7m4OzA8gOqOqu9cvLYe9iPkokMy+eYqW7aVjB51adRkM96ofrfp0C7cBKclIs28MEWUSzdlFfsQc8JKsVYB4BSCJXmUZ7JtKs1OvA44/gfKieuet/0n/sKuHbAUYm2t7wgswTAnPSdDz3KrZRDNlfMb7rnPpV5PFbsb8YLqOVW0UuIWGlZ7Lg64DWxhCblyzq0+oSelfImHkOl5SN20mIjmeRTidw8HiQqEyrhmcaikrKV4l2tnrEOKj+xb5CrdnNp0zHITY+C5jhsN/kmwl677CS3YCV+/id4UcoH0ztuNwYnmubBiBzY9PE9BiTd/8rBCG1Vt/DQO/YDkjqpiHP41VDLwRKDIJxUbdusENoOg67SeFwOYOoEKB0FIq0DLwlI6pxDZie8CefAV0dZfsgnHfSyAZGDIrVhcA6B14POJvDUYeVYSxzqBX3UOVEOwFWnU3NdPgdxlpW4nq+jI9zB9Kr6QjJX5dinmVZH3cmlRA0sP21Bx4d8EVfnW3mDH0F0CDBo046sD5ZPJakNiYN8QBwdYx7my0N9aCGC6WDVNHB1jjxZL3QqnB10ZRGpugTf2VLtROupXPImM9qJcfwYWD3kowZ1IAhwutmEDDLVNqDzVIZYcHW2LACvMIBy9QU+rhZjBX2PvlsnW3xueeIZOGtwzLCaqe0T5dXVVGxpadYSHyzaub/8duieRXVQJx00j2G/PZsuT0fRiSInQlwVbb5Urn7gCbnmpz/S/ehD+u8gjz77AiYDONGnFnJZSSUME9pE65R8YXNtr3DEdXsK2xjrhYxob9Yz22zImPbnj21KOfAvOKE9sU5rge94YvIAh7/eGhb5kB87JuuUNGjXrk3yiiyIZevUVWHl6QpEXEeLK2Xjn2Jydo1y1OMUJTLgxJk/rkq7fOLhp2XhBMG1Ke0zbHuUyR4O3WuXoe2yfXPLFfRWG5Ea+jo7UHcF4A+iLBfwlTf7If5pFSDOiUp9A14IhnMvX7mnVlpAygMJrK78lR/4aLnZx2kEZeLkuHuFi1ue3stUcSoDPto/WDbUp9YXBChjXFZiUPvQ5lR+JYWvQ4apXswPr+IcdGPVtFcdRAOW3HLCwNXzNGd5Fl4YfZkva1QQ1sSxjnxZ1MIf/+LPPifAV+xf8NLo8YcerKvse0L2/U8MN/SiV6u4oghRhjUhtv1qw4o2wGp1pX5V0xTpJKZ7XMdpNkiTmQZLo41haXRpsDw6KwNvUikhjT6GMc1QrLwxfoqYAtuTY7pGnjrSuxIZpIzxNO1Z6sX4BrCdttk6SFUetfZPipJlKcFyAJyR+4Y/VYBBvbUv4xrbXfPcKKTjsg72cOpUBwxIPKpbnU9egrjjh4GGgw8GHiXgAMaI4vFKpw+DHzWyNsMEC8tRkDkcOKkfBuBEl8AJdB9tASqxPQ9HSv4E+h8i6hRwQFZj6h/EVRhA0EXjACW6wFnQ0Zh6MwDX68Kr6UPOIHK4DhFxtwrmVGU5mQEcRByd01dXqzEoc8DnkwLVUTHxB2zdtgfAUX4O7OoUc9JAPbwOpGJwfxnxMaLgn4o2DObRAeMqHZWysmq+50G+Ps0La4IhhGlaDe0yHEVOkuWb0++IvQPETB9oC6u3EGbx8Gp2UxjLwV+kfx5+kCCqBuJzxZdbILBS2w8fs2F4Aqvn/PASt+Co80ercYUdznlzOOdDdsbKeQnnXJngz7lDB2k7evT5kaoe93rTAVXnC47/GHzHY8z0d2SbzpvJLjif+7EXRqmcBt1Kgn5CZzJR1riyqFYAB1NLA+YcQPQRrCDTFu4LlMQFhrdNUpval5BFJxAUSuswtY2oDJMP3HpMrtWZpDCwVHw6ytSFfdqBQYsWGNYD9SKBz08ixOEPzjdZaqDTzwgmGGDs4sCp9/ys3LbST1RSU6+G5jk+5OGcdtiPD4hITz0ZqLPXJ4G5HO0LjDLfdHJ24H2C23VoAz/JNprw6mV4SWFOLk4c/nyZkqvBKZ1xtUVOjxyD9Bj1LSk3nUyhZle7lkBt0iy1sdnBc477f2MF2l06pq94i0tM2JRpK+QOfXqpo0zew194KVUEX/YMX/i0hhkj80XTu3Gai4WzsZ2lwPn2xqYsfWF078GFOMYgurJxmN5RVuVJNmyGqNIdMP9vOXnl8vO55VLF6AhnCMtISDF7K3KRP6GMMF4EvTpwI23YmLJUqnspvLS8GFaQhkXK2j2wg6PPNyNhvCXmhgXed8vcUI0nKLfCMWgr+jGifI2qS/EDRuFXRtP6TGg3V17ffn051IXkAE8nkatc3C6gcaxYQR06nLrgBodSHRMMcu4FOOoKDDzqx/Ns0MBJYpzWBH0oVwczdSYghwMkfkiCnM4LKSjJhzCKOAdmXX2jw6O6QQ5XFQknMQfBQDc6/sqU7NhAMPCrU0L98NMzvwnjP9C7fazAg06qlOpJ4sJ24JwnsOS9ibpRPkLYDgnJpR0Pw8vhOpvyUb0G6uyDlskSKdccb5epaeihdE4dzQiihVy83mFGqKNjkMKBckIixAvoisAiMkendqQc/BivMpCSdaF76kmPVdad/Ak9L749GdsL4JxrvUICnPdafKCnWYtWuuf8t3C8Kw2/xXYXmuyx51/ESjpezuRpOmwn3G7y1XJ57JU31EEfuBWO6OR2Dvzc/mQ4pmznlQRfJ1aftImCfN9Ufuhf2u5ZC9CH7Ue3NSGp7w9Eclg3tA+3nXCrifZLtH0l5gQSuukEkc55oCjtGoYwTXzycf0dNtUtX67fu9VitGVuuQI/TVNRH8K24qCsM9QfJk60Gb/MCgDUQ9l1EsT7BH+c8BKc42U89WpwtgEvjzELLu7tyXuOZZS4FpVVjMZ0iPJDPaKsJkuarlrXRfRoKmEmw65NxbcaPhU76E1lfPIxXknBYWjGbevKBJx5znPLDa+aAhHXnHNbPU91zonoK5inuNBB58eLSsmM8+I0WaaFcnjl8o1nWTxvR8O3azm6Uvml8oy/XUvhhnlh3Gh5TYOnwUKaJB6XPU4bYjF4Y/OL8MvTO8aJ05Qdw+K06VfuanS4MoR6MM4fcxJ4iOfjyM4FwvDr08Ot1uUycrE3JkySeR9+KHsP3DkHDGKJrAAWRxdhry6PZPzZcUfFWZrmiS55wfTWgSrIMbiBmObASDxe+SIXXqTilwu5T5VbBej06PYG4mKw5FGHPC3EbYvBgAk6fXTNj4/oS2Gk5Z5zDt50gINAZ0YdczgCXFnDy4Vury0evztPPUC2KDhwZY6OOVdHqRd15FYGOgXQizKULx0CPganftRLVwNJD8eB5cNLZu5lOXywhDA66wxw7l3ZQMcXy+qwLYF60nHWKsYfBLWTxvyf2J5hXoLiaJk0W9hAaugGtzSvOaoQWjoe8yV2Ku8UvY02xCcsTJNfOVgxPmm6GC+jIU4lIdHJ68c0J1+oYVybSa8umyVsxk19x00G2b7YBtBGm+EFwX0G7Ji65zwhLBI595DBaC918uhzLzqnkSvz2q6XYxV9RkK1TbfOMnr8m2h6fBoF3YIKNf2t/AkRIgFaAma52IZ17zj3zbP9s+2yjXNygHZfxzYMatfj8rkoDH1Fz+dnP9W+w7YPZ1UnF+gz2EbC2uY8wvRLFPCRHLwGc3BwZf+jPbXvo2/x/gEkfRESfbBuKR12bAESPr0obEuOLQh8vdSSj9576HqREaZBPJFGj14EiE/JVEtHGf9NSu3bd5xv6Vw5DNJ010SHFWS5Qjqm9NsVVKeAPGm71gdZh2yPge1ZhhUqR4HUfABbyTcWwoIy3rNLZ9VlAs4KbWyo2DkPBEz08rglpkfnTnkvkgZoSTSupCSjTKQ99s+HHxyaMGkKvqaGF3LYANjrv2WhWp3SypHGIw2PRU+Dp8EqNdOK0JaSEfNlmiEsaxpOmF+K/8rMU13LtbXgBmS6dNqkg0VTrxdfe6PCC5z0Cu7mdM5/cdElOCu8RSpvA3beZGOZzq8tBkHLw/4TwOKoDv5cTaPzi1Me+El0nk5Rg5MTWuBLcF30rGFgYfWK2+qm42g5PZccpy3w2EAGOuQt11xbunASDx7J1/hUsiuk/oUjoy8TYrWRL+uNfwtf4lRHmI+qMfgCie3A2gwScMyhvToUcEpw+gK/E1HDK+Rs1aVjsoLOPeFv4ix1HqGmq3pwEHR4YPnhOOgZ0Fo2nFaDsrXdcAPZcF0cH0fjoGzzMYmaj89TS3PQf0kgJg+s62DikOiF3EpCjB+ni/GoFC+kr4QmxrF0pX3P8KuRm0ZD+mLwkHc1cW45Yr1zUtgJYwnDvE8+l8X4aI/WI/s18mvRbobsDOf8kL0L2E//ZKF0Xrd1HjwNdu5hQ8CyTh558jltOxCg7WTeRx/rJ+95Ljq/APr6W/hAlU4C2Z7yQ1Xl5wSVDjbaLfvmmuusI90xFlMuJ5Kz3n9fZr/3LuaZXK3GyrV2NidP955TB5ad/RofbmrfAUcn4uM/bNt07idgEWHBJx+hG4CWvxJBWdOUnLxDH54Kw+1CzXCk5bZb9QQ9t1l9BZ1myax3ZqJXO9voF01DxUyGn3yzbDxZZa1115PNcR9h4JOB9999D793ca/BijfNGJRNkYI/1o6rsm1A3xTRb1KHvHtnUxSmCI9S9rXy8969sgN2QlUWSg+BFfLQgZ8Sc1JdGV2aDjLDrHnz8nAUWOGfHfBxIm5Z4Y+O/pMvjizLazY/lOHDmviqWKifwd3V6anFCMqQj1MsVSOX/+mC3HnlCxbKgMF8A99sYddi9Oi36LhJ40hBK5ZXjq5YvisnZcbCCgABQn5eMd65cgekGs2nj3Pz0/m46bLycQrLQo75OIXpfKkuFdMU8on1CdNh3LjHMKaVa5ooI3IYQYrOH+uMRC7OTEtr2cg3MYRjrjREVFsARoDKd3zsE9iKkvqnRi6+9ial33vggDyMUuVwzvmlcLxn4ci47nl0ccI58E7f/Dyno91Uw37AIvDepScZ0LHGo/9aPPrvjA/JnHPkAfjwkDv+zvgtwjFoI0a/Kbc+PEyWfPaJviCnhoBz37lLV7n8jJ8YakXXQT85C843nHWu4unan3/87Nuc3lexIkoHXY+5xHF4G260kZxz9EH4CM/GeTKoG7/6eTvOSOdWG6nF2dBc5aPfjwlEDR37NVpK/7695ZeH76dfNQ0ZzP90gTzwwqvywIhnnU3gDdTX49QPHNVI26VZ1ug137cZs7PLc1Q5WCkuEGWNoUCaNjYT59uwSyYkZWgS4ryI6UegxVFWlMXpUom+OTrHOkcT88iVz8lL0lF/c3yK/81Zg7KQUpF40qORGveVXeTM/xQfJFIDudVh3R4Cx/JcfJwmDsMmvyfDpsyRK/fbMS/rmpfeksFd28vgHpvkwX+HNvSofqQJkz8466wUrqTPg0w66K3w4SvXv0DGSSbLmCiuCif8qGPYL5MMH+GkQ59mwcFujjH4mIMPlJMO2itBG3LiL9yqOPdUB+1A+fItX3XuV5daONM8sebCM0+Vvv4jOjxLfO8fnab0NTzNifg5RaM4iwHdwY9P2fgkgi/ZrrVhW/nfs06Wbbt1BL4L/7jnEbnmljv0KVYtJuT1PJIlKb/DYZL3Hh6h2Ax9k7r98LCh+MbBPp6LyI9+fYF+LVxqMWHmQoJOmJPsgoir73z7OqRIeAFlPqB4v8rHC1Pl6jHE/T7FXdulzUO7u3sI7ViqbVdih5BriF/5CnoxDiG3MnFtWFEZtUkZb3/lSS3bYz96YwKPVnz5jXEJadV8Iv0SRoyYnnnAChLo8Dtsu03inJPiJnzpU1+CNZ52LceuFF5j8yizFG2sUynctLxKYU2hRywrSusNs1x5IpoYXdNpOCkwHTaTwRmUAQ7zGPI6d5CvmeX+hLyVmSNI5JIffpq2fEuTlvkG1wjvNg6UBw9hQXYS9fkXX3ejgmInnUB3I0soxFbOp2MlSmWWk6GkzmYwWo4RompLDwrtCtccgy0GPT4y5+pci5Zy7AF7yXGDdsnRBzF+LfSgAX2lE74Yes7VN6gDzBUz3TuKz9NXHehAUz+1NRX0+luM+3i5UscV8zVawbneBp8b37/AuaZc6nbsHjvJoG23lF/+7Rb5EF9ZVEeC+1ZZPkw+TjnsANWf+HFog69jnrL/HtJijdXkjoee0JVJOueIYHtCvm5G65wBpFgG052oCJaX135dVt5fw1Ogp40Q8pKGl1gqpMl5FQU0eXIsN6Q1GK5hezGw0gf4cdrwil1L4htfuxZjEsOJH/zovzlnOLEOAIgTh04y2xsma3F44q3pctmwl6X3Zu3jLExCl8oljz2PbRv9ZO8t3cquIdHh13cZeFIJA+1voiGOdc+fgqiDhTDuYXH7SW4I7BveiaWD3Xq99eXIwQONkzzy4isyFx+OcuUGOOBNudxiwy0x7EOcfPfdpk/inJPJ9Tgiktu9tJ2C1p31zxwfrDyWpj7cJ47tKPwQ1ObYXnflWfiaKj7sFQbmN8MTq/rm2KffDBNd+OcMYTvgxEM/EuVX4tfaYAM5Bh9lsvDahKny+sSpWiY9kxx1WKKJG1n6NS5HOlYOGtgxB6wg1li6ClhXgqLtrdFGqkRCIQ7brtYP2wZCWMdJ/ywkW2EIHPRKrV1t7Rfqph2kEKyQMO8QvKzJ3/cmoDGdcdqJSXEWYPX8pjvuStJNFdFG45mF9lxR/qz5vFbCzuEbaiW8Ta9QJ8LCtPFJg1vLy9OBBBXoURU/r0SavqafXdP4Wl6paxpdCAvjxsfsb1eD65U2sBDVifKyPFz1JhPUZJwfoOaiIf8ctCBGXhbKOenES5zzcMtKwMN4Fb0SNypvjKs6odFwkNS9rXj03bvn5kWd85C+N1av+23TW0a9MV63qOg54FhRqzboy5FwoKmLe/EyZyfe8NELkslDy7XWLuqch3Lb4Cuo5xw9VH71t5vhncCB4hYa7JPtv23vos55SD90wPYy/LWxMv897EdPXlCDkx/YP6zPkDYtXgy3GDzhEcgzWM46BgmuKfjMTZMT80nDKUabBo/p4zRp4pCKwzL8f/beA96uotofn3svIBASFJSOlBAQpITeq0gTAVFpAooN5D1Fn8qz1yfyLO8JPkVQLFgAgSBKRzqEHghFAiQBHhBCk5LQktx7/9/vd2bNmT1n9j7n3CTA+33+k9yzZ9asNmvKXjN79uxO7TZhRB4c90RmcNmhNRoSRyArND9TmoSL7pji/vOvV7Ij6GMySZai+sAMPht/PD5YNDx3F7fXxsn7Htr3nVIkvBGV7DQ7xItlT/GkMADgwXdA2H65PYWrzIe8Zzc3Gp+5t3AKjncknt6jIB3jIfgJOJ4eabUbK9SgP/J9e1m2mwHH/nw4+AxDfGkyoY1IWYQ8tZUITvo62HZ7xve+lGH4pO1P5yRGJ7OwXhMBFMWjXPl0TFtvMPk47L176kujxvDkv1yE4rBM+IWt/cumljuCa6bDCDh0RdKxfrvi0hsSZdJneC1kmxy7UtOFK7fVn1OrYFNmmmyId9GwG6iVxcJSXEmkL3wpp54rXyY9+DOf10q09p6f+OPKsYr1lAsmhybpRmPuPd9q882iUK2e4+uHabDKp42aAvE64TTRL+y8Jv2a8rrVq5PNRySDg2oHu5f0y2UxzdBt/eT0JqME95wNo+ZaKEfOq5TOuRGHN4zYEkO5cjxLl/aOm5NOvU1340fn/DPfPd5Nx77SNCyFry72FEwvu5aIdYPk3nO8nIUtIIfvuXPEmv3KHDfx/gfd9VMedC9h+whup+59W27gtllndeF88cC93WFTH3azX8Jn0HGkIjyJSDv5kZnu3/94Ad4P40dBsHrGFzfpiONPx7hhf/gwv+bIK1/kxGPrsM4YeQxh1bofN3etgmP7zafev1dl5fzSO+93f78DJ3RgD8sorOS9b4sN3EarrSh6TiB23Xpzd9kNt2rP+6illnRfgL4WuB3mhvsfUtlefHUuVk5Xcoduv6myl8IK+hcP2k9PCPQRHuyV1wq/KstqyzhVr2obVVAl1SlfyDX11Si5jiaDN/KoaFp/w03LwHjan9O8lF0KT+MRx/TsMM6U9DdS9snYmYwxOpU+ooV2Llq2QbwAbOFCbNf6/p8vQP0Cj9ui9N6C5YYrYEM495z7qr/3pwmg39u9ZzP/BFvtw2xA3dmfwtugksc42zZwop4Z+6I9DEer/tgCwhcxMYEe/ZZl3EE7b2O5OjVm5lNPqw/plBPKYUl15eo5Vrr1BIrbW7BHfMN3VrahnPK3v3tavlwd3gWJzBkpKM1jEgdUVufGoF9ZmPTQDLcJ+lEMXB1n/4VNrI2kZSWMTrzOo8dK+wD2sb8XT+cs3Iqx51aewGOTZG0jstwRXgvlGSGnWrK0jLVICynjtZCdykjjC6lIni26Vimgx3Ybajh0Sx7xyKfFS50tpHm++VYbbxQxmyLcX37wZ74A5/wlzEiXcqfLOR/bRNJV3s2TsWLWU2iVpY7ss0cfGbP86vnpSNfR1cEjiwbaFg77qQ0ahObpFqaPdcrP8ev17ySrVT4bS1I9Kcfr0i7Ry+RtocWjGvc0eVnq+HlOgZcSKV/TowrLtSqXwc/yrVw5jqW97p6/17Ely6er0lq5Bm+HxBs4bzCyE3XxUZseV2V5t1GwaFfP1w9Ons+d997vNl13HRNcuY5b/e3uy0d9DHvQ/fYWG9TopPPFzjzQOU9f9qSdiPflIz+eo1bSd0y5r5L25SHIylrJlin8sYPYQ4tVrOXweJmOrYUfYVVx4l1TvBNNJwM4U2c84X7/2cPkKHNLyTbj13OX3TzZ9yXckC3IIcHpFg6f73Zw0PWVQK7Q8QU07DfXB0foDBGHDjod93wbCfjp0Tv2t/OkiG3CsXmUQef8xxMulfOvox5xo7/x3mnut8cc5lZY2r+rs+36a7u/33anTqk4bI+doTNeDg3hR6C94W7YC/pw9f/OqQ+6yXAwfngY33txssPW49d3199ws8rtsLdX55/HNsD2z4aTB982cijTrfZSyhVCyAjtKzbWGnyCowpVuS3dWnB/L6nyauHlcKZbtEy1cIN+oeN4M1RxiW8hLXcat3wwhiij5zX9i1g1EeKGDgw6W2W9a/rDgG+HesS+cTnnnicniGqLyL3gptvcf5x2jsi1IowtIP7Un6oonkgy+Cq2aeCrmGy/3z31dL1YufdWm+KEEbRhfg8AMvQlRVx5DjrD7fdP47K01ynUU6vJUJ+aEOxKO0gvTE710jb2ex+y+85YPW+141POuxRfR8UpJ9BDukMX9ntvEcigA4yTi/rh3A+8aZT75D67RaEznnnOnX/NjTohZZgn0bAcUTbQ0nikYgR8KYBl06kqzp1+9c3u51fc6q799tEJJvA4JrBuWQeyAeIIjPZjQk/nnNtg+rB6vu/O22rvvhDwc8p5l/nTWzjJ58voePIRy2VI4dpqmwR4GRnKCJJSuEe6BSW7R7FvCHSWPS0/WmJyn10YKnbvoKd6jVCT2H5TXr5FiuOjM3HCQBdBzvkxWDl/CavQ4PX1z3xKRyR2QdqIwo8g9RzSshSIuXr+gf38TZHZZ5/3t+re85ymAz+i243IHMCcRUxnvEjXRNMpP/JVJHTueOOp5lbacZJVlJHpSfSkWUTqIq0wA0qiSxk3smpFKrLby9Qtnwqe8bSrScvThKewNI6soE1EydPCSMosMZEHsJnHdIBFHZFO40YXYQL4H8KI/QROb2gKe4UjFs1JJy5vKlNxQoG1OdN/atjWYqrzhJgTvv7vjae4cBUtD143X0zZIkUIzPXyGW6i3Jc7Tqe1eCStMGP/J53rITgndIKH4SS/+GK/m/zwDLftOmsIcSz2ol+GVTLdIMPKITNYFtHIQeGjczjmWKGjM+6PhaOTjs+lD8FBp5McVtBDVYg34zwyD8q5UfhuAycEFi6bdLdz/Jrjyy/p0Xw/HuFTh8smT3GH7eBX4bjVhVtcHD7KsuaKrZddp2GSMfHW27FdAU8F6DVw5RQr8HdOfchNe+IZN3b5ZSVmrVVWctdjcsBJgtWN2VQIqbKmGK7Uw+qUYNmGkRI+5VsI+RHf4E3XAk/Rd+DVJEMaJXwjbg5L0lQxlWsqp7A0bvnxarx4tT/fioSSWCmSKBJwfb1wkoc2hrY085/PRbwVll0GxxLj3sV5INofjwnlto7v/uaPAATnGu2nfwDM2EbzQBw8ARrCE58hPgkCznd+8Ru0Hzi1akNoQugbdEbTPvQ4Po7kJ550fPFhHJTH+rS1hTabsD2wTAxcPYeDrb3cWP0egxOHDtx5a5+H3wswMX4cB0YMYRLsz3lHAWkzkNFe2nvO1XP0G56OsumG67pNx62OHB9+deEVmHSgf7OPs3ycQKc6GmJyJV+6/8TlCU7PP/+s+9yPTnLXTX3ELbo0TkTKQ9BF9cNy8Y8XGILvrWjrDvoeXzb95Hvf7TPxe9+jM90tOAFniPrxCRbHCFgw2i9ioqypzRL4/ETFswcGtItCKJ8lX8srbdqr3iPVL5UV40n9mi1i3Swku2Dk7o6zn7OOtLgtulxaWuab7mi93NmiqMbonB8C53w2jkMj7X9+6QsLbL/6jZCf65dKb8pL8dL4Rw89OE3q5dAmPk15FUZIdMIt5ZdgKd9O+Sku47X44cbMxp2HNghwS3hF/hqs2jhIRA7N093ya6Nr0C8tW6QjPjJi2pBKfFJYGjea5NrGj3mgiSGzdY6vdCqDcRCnf+IX4JEvIvnqdZpncTrp5JU66cyTXEPKrmNXXdWd+LUvNTrnJLn93in1fGgD/qXlZxpBN2T84nbuxq6MY9dCoKMqx1kODW78cDDo7PKoxekzn4kO+lorvA1yMfrRmUg0IEz4XP0e8nvT++Ao+60i4DUEpxf6WNmL4yfyyZcvkY1dZUVTTdc7H3gQpyC+5IZfgZNOB2rRuXqUnzpYY1d4q6eBQ/WLsy9wo95EPQZxJv2zbng2HDiuyjHQueKj+DfNc9zWE0Oin2yn7Qq0WTVYGQzKfLtRsoStUnp7G16lbRqw0LYsi9dcdiUv1GmE1fCibrnOKe9SXuSJSE7fKmuKVcXLaVLMtjKxHPxL2muqU4pvcF61fQptge3hqX8+G09T2XaDddw5OEKTWzP0tAX1/t2Tfgm0IIcTTCo0iEle0cLI1cQSK7lcSWe7Aa9v/+wUXww40WzLPGOcZ58zzMAE4fGn6KCjzXOVGeVpPV9Ke4pnwV+zo4dAV06c0Tb7sMLMDysdvPsuldXzX114JXhjQgEZLLNsgR+WS6v5KJffGgMHGEe0fnKflgP8OE6aueCGScBFWUiLIpLet1VZQ2Ws6mR6o/3QHjiG9D48tZsKZ3qRpZeF+VoTaJaBT9E8T08n/QAnd+4978fYMICnAzyecZctN6m8ZHr6Fddj8sOnAnM15vD+Rxo66XlbCtpSZAwmywD6CBMSaV9kXlrfomG7Q8jpBXyD/+R2WajqhrqVjKyec7m05fzbs8xhET11zSUW0sniUSF3wYBm4LhD7iu3DwzlXM051+knIfPfj/+R4183YdrVlzWi3ZSc/tKI2GXm6KVGuQ/sW109fyys0tc5pGqE6KydQh19J7pO+d3KNz694pOuFxoOJ23W4CDThY1Mx47XBc0vCGQ5GdK66lT2TvmBdfmSlUO8Cphehs9gvJvwFFbQuRq+9uqrNaLbOeipk24yUjuQiZzzr8M572Lv+XVcEU4kt7UJ5llZkrYRxy2siM1+CXvCQ+Aqss4y5wry4KKi5YukhK1pji9wZz73AvL8Dd5oeZUjDsfiXRut4zZadXm3/NKjcR71y27qYzPduVdc52Y9BwdZjgWcCz5al/bBySA9/nQzxU2Zbbnq3iCfThK3F/APTgrxuYoYy4i0AssMZ2L6gw9qxVPbaXCTHyI99eakg845OIzCFgfbw260rBurH7obfTIY99QSg8cwwvlinM4eA+PIjC/FIRlyvG6Bn5+Q8Ddxlq1+yCcLkUcOr6Opg2f0THbL2+xQYFEB5Xh52pDr4Jbfy5XF1VMYtCmukvfD8bzhH/e79+OF3z3wcvCEq2/wdY0KGmR7C06t2ssw2jjbNuuyaA0xVzvSlpbgoHPFXO1nkbDXGlvADthxK6l9zZ33ot/AiZUD7Z3gvDxp+dO48GzvOfSiAzsGZ4MfuJPnzfyLbr/XPfE8Jqd6QoRVduBxjzz1VxNFm+aWNJ3cAvrNNljfbbLW6iRVOPXyG9VO+/H0aJC4i2I1m/oOoKy0oTn8RpBe0dblKPORBLaf9GkLG54uzGntR0/Rk+FGYPVrycTkgyfLYPX84HfvEEk4uTn/upv9+MDGSVyUj4E21XcUVFfsbpwYYYwgHgWhIfCfr1eRcDbgJwthLAlQXfy7Aax3BJUr6Y8e2tUvuz1VeL1CW/t5vRRZSHLr/HB0ve6CbkjdoTZjsZHlLTqhOOfiS2sd9O/+9Od+e0iCv6CiPJ5xwiWXQTXcVNAJcmdCchr0LuV/9LBD3Jgxo6OKP8GqhpXd9zc2+/bQlGfY1lmKehpSQd9ueBt57TXjW8ezF93Eo0ZgkX+mA0lzvBJPwhjadEv45XyIX4IRnoY6nBzeTZp8y60jlRjiie7WvnQFnLIYfHlD3yO+0RhOCoPkOCAKz2ty8bUTOzrolEUnnXKPP/nXTMbgy+2T3HOulfMunPPZL73krp90e+TDSMWGFd0raMDjDR2/uOFNxj5sCzqycJdt3B+uwI0cj//lSuImOXbllbB6vrqhucnT/7fl2FBoCGPftow7+zOHYFuKv7EafJv1xrn9t9/C/fD0v7qJt9ym+ygd9D5uTRikXRGnzW2MwZWFkZmNCa68SQ/R+aFzThpdkc6CHo1zKwKOytNeeG5RwGjP8sC70hGO8G7gBCzq3retf0nUWFwPJ4tOCx0W02uI+2apn2wKB4360dmTV4Q4OGvbEPL5gh5vLDyHnYVQLnTliiUYym58IqECEiUrpLUxtU3KyYIgGY1QiJvAjU8kb8oLSDlv8UjojFcOz9OGl16jPim/PJ6mU51SRimcdkZavNEWhvBRm0tvmSwHfS08Gdpo3Fh3x733or2gPbINwO52dnnfMB08vzKrSsplwBjkKweeV7Y3tSDUf3A0+RRmB7yzwPPPGS7Ay8neQYfTm9ZxyrtQRp/NNoR2xmNP4VzzaMSD99jJjcbLyxZ+c83tytfecji4KLBa2DDbZz9WndG2ebY4T0ch/Sfeu6uRusfh2F+CYyV1cgr5zx0V2jDaNfez0wmum+yCC1uy2jS/D4BJwRD61yD++tlX0qDysWKyPz0ZwORBRyuOcptv9E632bjVI+UvL7zK2wx0fYvhhBeH8sHOw3MwkcZ2l6F5tL7JAm/WAScqlBP6F+vL9y2A+BSOfZxypRNEsU5ZDtY7HXP1YfZN5qn1R326icQ23Q3ywsCxci0M3h142ngd69nwTSdeLW55PV7r/HDU6hsjoIgK51x0qTvmiMPx9rR/ESrV7uTjvq1TW6ZMmy4wT275wZe/WMRN6bqJf/fEn3eD1jUOV8/T7S1nn3e+4+o5K/sd49ZyY0ajfIi/MGu2m3L/A2181QHns9LbmAZAN7ytC1u9RF6mEzu5xZFZ4mmdOg4akUkZP8nuHM3kG0FJD8trvBo/uxaQR8y7hhfBZpuSrVgHqf1r6yTnrzJUgdI9AUV5AZbnG2oKv+Sa690R++/rlk5ONjC8/Gp70nMnnXi9OOfEPwtjQilIt6QNlnB4M9IxhLi5Tntkhrt00j/cbpusJ9TDtt9EJ7ZMvP8h3s20cr7tuLdHNnyp8rJb+BImVu5YEckNOnfMIxEidP6/fcQH3eexon7nnaDHTV5/2H5CNmZ7s63Va8rDx7kX1t+I/c2W0AybK9t05KGj9gtLVzwqpwOErTMOL9DRCVoTE6LDdt4yipg8/RE3DU9E/N5e0EOOPteOm7xevAvbGuQQsNyUoXYFJwe8uaKp1U3an3DqKecBeHDYOMFQICxT2cpvyrSl378chwAAQABJREFULSO/Uk4Wcto0uymvG7ycvlOaPHOcKMd0t/bKtMVJFxGrkRQuEm3ZgDMHJ3zaY4+5O6Y97DZdazX3r/vu5j4+dbr2TQ8sOs/NY33RcSYR/rzzzXSol0RM6yhQOuZsaQh0gFHH/vjDN7nRo8e4Y963u6hum/qQe+DhR9Tm9KRGEzzUf8IzjbbZhKvn3HsO/gPY2jLmzW9xB+ywRSR5/IUX3Z6brOuGNxjrHsN7abfedY977BHIY5vGx7mG5npnlV8M5bnpm63/Try42uq3T4D+oztvBaf6FXffgw+7Wybf5Z5/CjLhxLKE/ErwICcwaNfSOasLwWgFGoLtOP7Bfh0DnGs41Nx6o8kDJhCffO9ukepxfPn1ghsngfeQWxFf+l1xmXEaG4bwoaObb7vN46FP84undNNVZp7xzq10LL/05uQdYxL7PtoQJyt6QgCb6mkZVWfdswDExxMRTkq0nQZl1f5667dRs/pIW/3Voy60HNYJq+O1CtEph8DXs/zY4uKbY6eCayWlE1KHfEri3jF/t/PIWoFhBwlQ7i0/4Tenua9/+miPkPzSaedpLYfgaEU66cQ9Ebh/Aqzk0CekjVFunTn3EqyeByy7NhIlmeZkJSC32847wQlvrZ6fcNIpcTD4xrH/Fj9adCNW2T70ifayklc3ejTiwK4l3TrxTnmm8bR8pXgdbi/wOlzdaKR4glFTvgSj3oZsc1nbJx1bouhreFOPOpvKJuQbQoqX6mT5vObwTumUNsZNZjroFvTMeZt8wpUX+MS0CQhwbuH47YTz3DGHV9+rMLT8GvekJyvpa9qe8y5WzsmPL4eeffFlYl3SX+3Cyp8rwDTz5CTiipvVj869FPu9l3djl/MvSo5dbhnE21/+mvXqHPetM84XfR9X71itesReFTL54ccjYPk3j44nrBDIL5UePuUBOARY3R7gmeO42QcHSTdftDa2kbSdRGYQaPUQy81Iq3kFVLocWAHnDR38uVrG90616qYVyiXd8ius4H70iYMi69kvv+p+/pdL/Io7t9BodTKMzXTK8ETh3Ttt71Z867LutPMu9NtssGqpUzDwuF2OG3AO2w9fQ4T+v/8bJlCQv+G4Nd1Ga6/pLr7qOvfEk09AL7h7NBwdHAssF2h86djufIGIFstJ3JCo3hy9+2h41TwTEK7BfgbNzZbyqMTZhxDI2+DGo+lqutTRVOS3FTYWt01Eyo9x1q8minRysdr6i79d4n75uU+6cXiZ+aM4yefXF+BkENh7AG1e7iScM5WEMtk+uH0lC8P8xDwnYdKL21l4Mgqdc//1y34cT/r1wz4QV89/ctb52j/NlxvhLeNvKO4/T8uZ6m4imc/V4AHw70f75NGIB+3O1fPFDcWtOGaUO2L7jWPauX10nvmHvvJ99/zTT7o+ONisHH3lE6vrn9h7lwTXufHYcsY/H7bB5WB31e13u3/7wU+xLs0VZdgHtqCdfMeukFcSLEOpHCmS4QiPq9l4WtVP22ECscrKK7rNkq+PnnLRVehunBj0uf122c4dua+f9JDfBvsd6uZBJ06a+4bgjIMh66EfW+m22Gxjt+X4jdy5l16Jr44+iqcCA15/cuJed+Dst8eubuUVlnd/ufxqTGyedCu/bVm377t2cDfjdLybsEVwcC73uIP3PNSC6jqULLT5WCbmJRUpLP6keAFHCweR8P+NiMYnlI++qvVrlkwmKBSxDl5ArQXV+eF1K+u1jBZmBtsE/3579rmVr4GmMumIn//rk93+u79bYDrqR33lmylKT3FubTn2+z9o0aQNtwVtjLES7c8QP/upT1jU0Qm3vecR+BpF0gaWiqyDE4d1oE4Z4oTFQPv0GJpk5ax6555zqKbJrxeeqbPUi95VqeVUN/xynF50L91sUn5hbayiHPNloy7r9Rw4y5P+gUfpXQZud/nykR9FJQxjz/kq7qdd7jk39jyqkRMDhkZbUP/0zxhgkNV+aabDDWbaE/gqYYfwJPe/qhfAPnSsuW0Aj7nT8PsrbnDHnvwn98VT/uSO/dWf3adOPhOnpODFuRBWwCkro/ikDCtg3NtO+WFdy1AW2NUvoKCsdNxww+aLd8M4d3lJnIzxTazmL7UEXyD14aTzL3fTH3zIb4thuVA+0XP1nI/KsXVgj+23dofji6u7wVF3cIKGwY9w8nVw2HbbeXv34X12dx/G6mAfthgQZ/z667oPv+89boWVV8Kq/Sh/dB7x4cxr9Y+8EfcvBpIXtjTAkRlmPnSmjYax6q/9uIDxVB19/RVX7jfWpEN1aKOTlSi7dtmW076Rcsjh6iMZzxwnpU/jbbQZnxQ3jedt3TdttnH8pxPHFwzRHqc+/Kj73aXXiPSI3XZwe26zufY89+PIQe59lv3obMNunq7ahknI1XhOorQSi3qgQ8hjD/vx0R++vPlVOOc74EhPhl9ddKV74KGH4Jf7k1U0WWgoU24nOqbqj6GNjn7zm92BO7ae7EhI4WelZd/ivnX0R9wAjlQewNeA+UGifrSxTddfD3vPVytQVEE7bby+O3Tf94hG5aN8bgEz3e0ayGh//jHY1afyX3/vF5Qr2ehDPHGJMnRyy357RIJZeAfmahyL6s+iB1dMVNLAiRBX3rX9B02cJzzJQYejv+Wmm7p/OfSD7l+POMQtOmpMqBvg4+nYIkuOdqussaY77t+Odv9yyPvdqquv7hZZaoxbZbW3u3897EC35WabyW6L0GaYEA1wYqR+GCYSTPMjUahrrfojza03WpVXPflJArcbacsR8dFvdUqNytChP6aF7DFu9dBcBz0y7YCettnUH+hAtlCyX/896DWWP+qr33TX/PkPtSvjP/jKsTII943z7PJjj/uBM1gvlvqPn57kpkx/MN68I224mcc0IyVYBcHj7P/evTBzXinm/OQXv6ynZduu41sHj5z94NGpEdHEJZw6eMK+Pkrdcv3ydEJdkiVYghOjDXxymeRhwcposMqwUeJJGAfmkCd9EGcHTXlZ3OQYnqVrr4lM6UTeQE75CV6ApbqLpiQk4V/JJjzIUtlCGsCWfKNNryFuA5T0FCzYKQj56o9OdH/+6Y+x1QV7O7sIdNKXwna0jfHJ7G5eCDWWvznnL/H0GLOH2ctwoo5WDsvAlc6AAr9UiFVBPlbfb5tN3G4brBWxZmOlXCe6AHf5Ny/lVhjjt9ZxVf0L79vVffs3Z3lbwol94MEH3b/95JcwKVe3+rCnfTraD1xuKoXPfr8ER+cXF1/jfvjh/SL/NTEpuRPH0fGmy7OkvU6tqVKt/mZ3XH39syz4y8sZ8nmCB/egQhBurHCK8eife3OPPfh9jifRWDh34iR32cSbcTrMS1pB50kvfBwutlx65+N0Os3khXD43rtpm48caDiEPJliGPm7b9PaksAtNG4eJiFwBBn4QSg6eMO0OfjQadEjdwiRU8RVRuipFV7Khg01CaItEbQ9h3RSil0UFuAjesgnTHufAbJ8EYmQlkIIdD4R6C0RrtbGU7B4E5DRG06FJsERPEu36cZ8G2sYtz9jnlxDKRIIoiDxP94h7MN7DTw6kO8B/Pbiy934tVbXVpevHLiPXpb83h/OQXuHDVEHsi1FwqYznn7anXrxVb6tkCX4PP7UM3IWNXFynAyhfaOOx7zlLe5/Pv1RtzZW5xkm4aNdp56Pc8nxvoOOYGTbaTu7u6W9YoldyEMrheA/QEcUTuzBu1X3nvP407NumKz2shRW1Q/YZjzJFHbcaD236UYbutuw5YWdghO8dO85ke5/4ml37T3T0aYG3Vo4enSH9cZ6Yvx+AtuA/nLlde55rPxr9Z/bwjgxiRjtEf8chcZDXhGRef5Pk2NOQjEW0HFeCT7Ae7faJDI9/aqbHBcE9YIqbZw56AP4jsHgK7ALJ6nzUG9gSzvJMUa/ZNhv5+3cyfiy6mOPPYoyYGKFZxd8EfV9e+yifP7wg0iLYCLDyRWDjrGEU9+3KJ548NhWjkUYz9hu2SZU3+iPKgdgmsgxH7bxwb9vwpdRDUdbm/hEkTbkgwj244BdubDNjzCMnLJ3gSZLZQht1mAqM1lmbdm3iWCTPK9HFfxo206E1vTGCzQST2rhV0JP/t633So4S7wU6JDvv2frEREbfy9bXTgJ+Pv1N5RYzxfsox86ONJz9fzm26ovuMXMDhF1oC4qvlu8DuIq2bFxVqDNiYWhR7PE7nOpG0PlxlkYPAwv5Vwql+FV+KVE8xmntumAl6fFnvp33T5aCvnytNIWy8tpZbR8u3JF+zPf/b47/gufdSu+LRz1Z5k11+03a92oalAq4LPwsvhvz/1rhBXLj1zpCDuktopEBOJmpC8ownncFi9rHb3nDjH7+vsfdj889zL3EsYaOk9crTp0l63cYeGLmzwL/ah9dnUn/Zl6DLsX8b7InXffHem1B5Q3MdTB8BysLoHHZB6PmISxK68AGjgUuBGWlDT9c1szrX+hbIzLVUe6EpjmS6G8wWKVeZgnPmDltG/xpdxh79nVbZM4KFNnPuVOOudCN8zvR/A4PW5RCFsb/EuhUBN8zLGmnBWWWdpts9l4N/H2u8AfN2TYaPnl8cGnsau11IAzByP7SRCgcvS4eksHgjd1OIk6mYK6wjGBoeWoqenKOccWCe6tRr5Kp7KAH3UBQC/MwinkKr9/HwBlTPdSE6kmpHZN4zl6iUMTvtHX4bTBSzqqcL7lUj5juR55WgYBEDuJ4RzBHt6I7qu//IM77pOHYi/2am6vzTYS2qk4B/zxp7AlRHUMfNhzJvZAn3rRFegWfvWWLyJrSwVXSlU3gCO+4nLLuf/8+EEt5xx73Y896TQ4kHDwsMVETjrbPsrgS0Cd2rQ1MyXX4OyhHfXD6dxho3Vj3uM4MekjP/mdm/3883IgqQ/PQv+fIw+KL5DujLLdPvUhrPgPu9E4gCFdPb/m3unuS78+2x8VCa7cqrPXNpu5r33Q+wjcRrPFhuu5y696BmUNT2TmlqweVeo6wpJrnEGZuHrOpxcfwpYjC7NefsWdcdWNMBfshT7BsUaLBoZAetJxZZuOu01QcaWdtAc94B6GJ1c//B0WDtgnONnFZHjfHbaOnLRCrtV49EsEblnj0xDJ43jISTa3OuHFb+rs6x39DbLoaGsCzHxz0Dl2Ec/uNeizfZzkvBpOeeK2K9V9N/Uvld6wP2+0Eryme9BLtcLuYR08zSfsPmxf2ftjR7k/nfDj2g8Rdfvl0ZS339byw2bnnB3JGmQgLumZ8mV8i03Gu/Xe4R8HMn0CVs870TXlf/Xzx7j11lnbnfiLX7nPHPVxssSLpbPc0Z//knsXViaP+JDfW8qXTX/7pzPcLZPuEA5/lsIK50cOwSOuTVvO0Ze+9R9uRvpBqEI5I4NOEdBaMFuxLBqEMtsJryCrWHbyLdGTSYGHeOOnyCuHl3iXeGawrnibInalrBDMPkpmvA3GawVPGfXlSukq9hL/jI6wwM/oTBbh9mc3XMNtlSAldnjB8BF3xLFfcz/95pfduA5HL1YpO6eOQ1u/9LqJVX0zMtMvghNbmy1YYn7MRFsjcLM+/N3bR3Su1P3o7IvdS/gQCT9mohsMVqv+cNl1bsO3r4jjCP0TsP2x4n4aHJ3ZxKEMODR0DrXXmzcwOjhoq3Ie6eTgJjv5ocfcRquvLFmjl8RqMtsynU79gYf+UztPZzaPyiHCvGE43qBqDOStlXmUT+dgw1nmyvlu223pDtulddPmvvMv/uz3bpgfP+L56jg6jqtfLIu3JXX0evpH7B5K4fvvsKWbOGW66yc+5Lx/p22qOgEmPWlrhBXw8tv+ODJvKazszXz6n+6Hp/3Zb6GA/T51wL5uLXww6pyrbgAf6jfsrsX+4AmXXysc7vschW2M78fe2fHYu+urdRgnAv3OzXx8hrezVutoHziddSG0h1Yp2hHTtp3jaQxLSPI0s7qBEUeBtrVAGP8SmOXa1VDzNLmh5LAVVq9xOgtfIu7HKvgsmOKYE37pvoRtEO/dcrx7z+YbYVvKOu6E8y5xF+OlRK2GciKHKmJ7lV5kBm50ZIe58gu+o/BuyI4bre+O2W+3uC+cTvJ/oA6HXnlRfcVP7NAW5MCJiWhTXdM4pcSANkJH0O9zX8StjQmshRPOu8K98MzTbujF2dAX+7ThWD7w4JC7EB/tOjCcQDRulRW135r6r7Paqkaq63f/eJ4bxPn/Q1glZlmGscJ+wcRb3AHbboKJxtuEszZoruDkAM4/+w0OViJqWzD9eU3/2hBjPrBYLvCmg7w0XnzdO1k9//P1d7iX5mLvO/KHcOwl94zzaVQaeGb6IB184Az2wflGPXHCLCeaTnsI78Wk45QLrnQvPP8C8vrczphAcwuQBW2LwbGS/fhjWBoTmX//8IFu7VVW0Lh1zPEnulmzXlDePuhn3Av/16tvFJ/Ro5Zwjz3xlPv6iaf4NkMsyN7vXTvqS6hstjTYaeee7y678mq0gSF8ABWNj39y1Jkfgke2VM9X2v21CCwSR660GVB2mqYehJV0qoOTptvgJ9rt2NUW0p7/ukP4Iug+Hz/KffVfP+WO+OD+863Po/gy2SHHfAFfXntyvnmVGHz2U5+M4K5Wz/NWEKl9ZN11xmEP2Sbuj7/6eSXnyvMnuFVWWrECe/fOO7id3rM/HPCZgv/xlJ+5deHcp4F0+x78YTcF580vjBBvSF0yT4tfafzs3MkNLGVnMszBtDzCc5jlVa4F3iXaFJbGU1518BSnFCcdQ1f6lhjksKxMJb24wkXHz4J0AF1aB8wTbQuJgNafwXGdjZX0I770DfeZww9xB+zlV6mS7J6jj+OF0K/+14luWvzSqHckSjYynVmaNJ4KJZ0GvrBqNHal5WL2pZPvw4r4LN3M+7CazJMN9EgYK2sT73swOugkWOvtK7nJzz+HVScM40PgaX6h3ZiAw0fGOrnEVp2ipGA64kBZ1gB/cdvVlbp7txaRJGglnKvhdCQA94/Dkc76hPjhkTj3a3OxmvvD11xzTXfU3u9KuOGF1V+e7l7kZOQV7OeXc86tLah7/JFMQmRIpCkjGJUTmY3WWMVtuM5a7m6sonLry7brroUPHr3a+vIpnAjpGNrWFz+4Z5S9EfYHr7Xqiu7IH54M3YfdWquvqtX3jcat0cLBy6U80eLnEy6SIv/1+aMdjw5Mwxk//o77+NeOc1MfuB+TIpSXq8J1IfQtZls/y1FD8SrgEm4KS+MVwgY5OZ76UlaHbTjkVwCm8tUlw1MHnfjBfow2fPzvz3STpz2IE1f2lIP9tYP2dcfgRcSLcCTjNXffp1Nf0IIhAHXM/zw+Ew7jxqin7Td4B1bfN4yOOVd9f4I6uQBfJeWq+fAc9BOuoHOixokpZIJFMZT0J6Lw5aTzy76rVGgn3T9N/XEQk0jWL7ewcPX49gcebjno7MNcUUa7Hbeqn0STyf0znnKzX3ge9C+6QT4hQt9Un4TTezuOSjUHfR3QqC+pzVIbWqOlbV15KooWEnSUhx1Xp7lFbDF3CFbP7djIWfg42Fk33+2fLMFmdLW5bYW4aSCd39vtJxDM0/glNb1mrBNO+j+0+87ulxdcDvX73U6bbiA2yuPLtmxf3K4WCnMwjpNNw8Un/cAd8LXjNXleFdtwNl9vHf0Zzubrre3escZq7qCvHCfQFw7/oDs0eRpA4Bbrv8Mdh5dQf/unMzFBxFGUfFHdGPwfvQZzqRxvlLJ0vwf9dTb69/7nJHfORZe4r+F0l5Gumv/mrAnuN2dPwOkvnGE3h5JT0Ezh3DvWHhdPZyEuV7U/c+TH28j4ZrcFxj995MfwlvWkxq0wv/njGe64H5/gVsJ2nz/+8udyzklz1L8dK1Y/+PY3HB10OvR00HmUI53zCX+9wH3p298TzrrQb4tNN25zzjXQdnHTMJ27uY6EJzuFdZJuZJRwupbLO1xW5hJtCmOcIW8bKU5JJ8K6wanDs8Gio22yMklfwHJ9SzpKvyTDaBNQbfTE0/7kLrz6WnfMhz/kNl6v9ci6liDLYH/kfvMLr77OvUQHMgTpgLhdS+Uw2xiNrqGeQIj2hH+q56r1ePqKbsxYAeIRZJCiUxH6cWOfhq0glYCbIFeO/cuO4DeIFUc65/PgKPZ7Wt1s9dg8W/MwXaAD966TD8tDH1/7PwGnHlbGKFc3+je5IXxBtG8AK/W4eXv5mTvPsnECgnxuTRn9lmXdtz+8P5xn4Ifww3P/7qY9OsPvu0VZqZLsBkdJsw2mqV/A137xEL/0zgfc/lus73bf5J3urkeecNu8Yw3s1R/tJtxyj9t/83cKS08PxFNccXb8I+6LeGmWNvrhJw5049d8u9sWL+lNvOcB4Hspp/39evd7PK0Y9aZF3e+/fLRW03932bVuBex7pnN+yW13ux+ddZF4rLncW/RUY9qjj9No8i15hQcWtMSFhaItgr3b7BkwvYYtMovl+Hna8Lq5FmmDXtKxhkm9bu0EtCJcUG1fYVPkH1fVuap94bUT3e33TXcH7LItXsDcSg73AXgKwr9uwxlX3eDOxAe3+LRV21ngnPOsfb1QWnHO27Vuh7BaPNTaGPWgo5mGF/ESJXuGcIGvIwVxnQ2n1AK3qZAH22t68svsV4DDCSfFoE9zMshGTl50XC0sRZlkgIkvHXWuVg/JgJAHXP7zK8Fk1H2gXDrp2poC3qlTPPP5WVjFH4/q8fXDNsCTXsavuUpFwMf33tk9gieTE8473+vHcjCQOf8QLsAxsQfhicB7ttzInYpvOLCf7735hu7+x59SOTddE08VhM8JlLf2rJdecft8/cfYNvyS+/heO2Hb3ru1/e2/zjw/ThJuRXs56sdYNYeYk7/wCbfZOmPdLlttitNv7nH7br8V3l34p9vnqz9C/hA+yraU2xEvDZ+Hp162bYblruznD/pK6Tf4j9oTdPTWen2UzUb1qER2N4nwtsiCUl7HLHIgZcDVd8bQED209pcvcx76uS+6lbAH8iMf2N/tv8duHfec/2PqNPc7OOZ/n3hDdMxLN/o6oSluGi/h82xz++Qu83eFw8y/UjC8lVakg04n/leV7SlGQ/sQlzNVyn8cA+Y5cLrp1PP6YphscHvLu3DiAh30K665DscszRTdZnDIuRWG22K4aj7ljKniY/zTa6fypbh5vERLGPWvy8t51KXr6OeXd4kvdcjhebpbnFJ5uuFV4l/iVYZ5h1RycANCYfAf3R83D8GQ5lBE51BBjk6CQyA+U48fDVj+8+GkQT2Cn39xKPCSV0ACv+XlM9853i2Po/k+uOdubg+0udEdjlK8/R9T3MXXXO8uvfZ6zyT7laopDG2Joc2GRGxDJiK1xtjCVWLQvgAHgC+eMWy19uruRnyoZwircW4IN33y5v5P3DjHYnyx/kncJ57Fo2Q4v4fixJIN11qdIDfxrnvdX+DA9PGmK1psb8FLXnwsvwG2xxi9Xp6SyWFT3Ljhact3kFvO+mHg8AdbGg1Ba666sntwOo5mhO50RMmXK4ooSQWPttCeUujHVbkffOpQ9zZ81dR4XXrXVPf3yfdKR9XfItBzCDpQCLdJMAJHwMwnO3DSgjLx73rsqd9q7be7XTcY50675jb3rg3XEXwCVgT322w9ckHx4SgHJ4c051x/q+DQzE247la34Rqr4gNQK7gbsOef7Yk4fFmV+rw4Z5675Na73P7bbYaV9lXc9MfhECJ/A6zab73+ODgdc9z0Rx5z5157i+qATxbUdukQQCbV1z0kFkAlk/zSTyk3H0fydIlPCusGn/XGkPZLOjUyPHXHnyZwdPKIp7ZBGHD6fbu3fsl8fpxmAP0UNeXb09AcTMDgdMJ2nHA+PuNRd+KZE9yvz/+723PrTdwHd9waZ26/maS14XF84fLPcMwvvGGSmz0bq9FzeFIMXwjlx3PmYELKpy6cFoRy+FgbP5Yg7aOpfZQnikE3CyvdrGsL43FE56Q778FLj3zx0E9KuaK8HZxBw5uFrVoag9AvXsAHzAw+Hu2lD32Z20T6FuckFE+p0F94Ksp2+HiY4b2A+6V0gO25BWS4D/gcHzhSQKbeleBqcGhb6l+qG5QJihof6qxyBeWtvGzzfOl5FD66ZLh1R7mS1HAY/9i7t3O3Tpnm/nLBRWgaGGslF1LZt0KfnP3iy+5vt93j3oNvOey1+fpuNMYc8jjzukluD5wdz7ifcIAh6Jj+2w23+UkO+J2Jk6c+iY86jcP4wpdH0dCEc/qVN4Q2N+z+dPlEtwnqYhy2A1199wPu0WeedevgKdje220KR/15N+PJp9wZcM7noZ1pgoOxpw/vp/QP8r7h67NVqyzZGz+wbi2kcYPxanWMiheYeOmfgAv4p2sHfYHKRUOZnzADe6SO+9nJ+nvHmmu40dizWAr3Yg/7i+jE6QBRwusGRh4LM5B9k54z8JEjhthIEH90BlaUQjD17Dp79ovud6f/2X344APcz358vKFppf7Tx34FAzAeAy7A0KR7SUyv+DkPq4/54dMtrclKbZ/TlnBynZnO6epgJdqRwrQqhPalXscGgv5X0qPFP2nr1qBamY2xJ55+xv3P70/X35oY4EcviZcF0xD6/rSH/jcen8js1LaGbqLz4cJsXUeX0vPFTW09wWN5ruxu+85xyt59o7Xd5XdOcXfeN82vPtMscF5HjVna7bulf2RMxJl4ce0JnMICg2EfOrZ7hK0Zyy+7jPs7Vpdf1ON0EOOGypMvNki2bpD+jmkPydnQo2qs1nknnfdb7xTwBkkH/K77HyR6DPttPd79N1bytUKFVVG91IaTIbbGCrYF7nVn4P5h6v65A/ZxY1dovbQ79ann3ClX46MouIFq9R37XtUGMAnhSij33qum8cXEaH86AyhrtDEcg79gtfyoXbdyn997B239mXjfQ+6pZ58zNeQ8gCjcmp17ESfjsI1R2OxXsR2CQY5mmJAg+eKrmNjQQcUMYTa2ACjA6XxxzqA7Z+Lt7v3bbOy+9aF9PRy/d0x9yH3z5791s7k9h2ey9+HPGkjAam7TkVUlkvKoo09xKsRI5Hm16bwR54yStK8T/SZQszDgoX5Yl/yjTDqtcM1UF/r4FNp7/9zF3Cw42Wfh7OyzLr/GLb/ssjjbfplA5VnLhPhs5synnsWWh2fgpHL7Ck4Lx4k5POlEH9gCL56BT4ePsihzpIGlkpMPnvdj60nclgH4ntg3Pxn17NsFJh6YlPKJ8Z6brh/FPTDjCbTbV6XLbei7WAaLeXtts6m7EJPDPjqe1BMO+g6bbhi3txDx/kdm+DKgPbK/st8ocCLMsrPcDu0Rp9OQRxqypLJarR5J2geTXk1mUsL5irNuaXfYH4H2//P1k+SgfyxsXaENL8QTpz03foeXBHyOKRZ4vCMrjZOH2XNQRgT2d7/67WtzFras6dQf8FdcOJwMD7gzr77BfW7/Pd03Dm1tMX7s6Wfd537wP+4feGne7+fnhAK8ZTbYHvzzviDB/y/89NCX57e4i3Tb2XSDmU9pmi3aqgF4aXUADUKrNiPkfR9u9E1BKxGUMUKjslEr6I3n1g2mJJMvV5zwi1PVGUr5Bnvf3jiGMewfp5N97vkXupvxcid1zfXkblWOHX5FxXcs1gVhHMgMzjhhmnWDD8N//uRn7i/nX+w2w4urK0Pe5huPd5vjhdHDDj7Q/eLU3wkn/emqLTTYMdedafLUoN5Al+qgeIJrPBt5JPikp2k6lsVo7CrB/kf0XcBLeCVYwtpHu+RtdB3LQsTAUzZnnG2AVzlGqAek1Yd5Y+JKLq7SVf0RMV09zN6Y4U2BayI6FoxLrUiLD29EFIlcf6UC7WE6boZNIbZdIjUUkjIYrC34lP9VHsvER9pZID66PgrgV8Yuu/VOtzVW0ywcf+g+7g/XTnJ3P/iIyrH8W97sDtlhE7ccXqpS/wLiyX+7QkfKkcedOGbO4MvhjPPjj/yQ+9M1N2t1imPZKExGPrf3jhFn2ownveOt8WfALTl6SXxFdRXUA3UadndNuQ8R6EimWL27HltATL9dN1gHOvW5y7FXnoUYteTibt/NNnBr4ANLpgO3jMjRh2O7z3ZbuF3HvyPmsYx/uWs6nga81Q0tsxTKAKcDzoeOReNqKOIzn5jpnsDXKF0fnHXe1GlH1jhtBpmSg4/YXIYVu0++ayu3AfbiE3bZHVPk4JseXN1j/2Q5CKMvQRa+SvxYJfeCTQgShMO2SbtQUSCLF37Y5k7GC3CXTboXq+gru+Vh5w3xRGLDsau7/XfZ3p12zl/RVuFU8ahLrSyThtIQxN9HxdjgAWSXgO2TUoCqAGr0AWb41DMPqUzmMa32meOGdGy7sV9CCGygPqB+ij6Jeox9QjAwNhzKoCC8A4Ejb6Aqt0qxXfs0ba4vudIxQ30M8WM0NCrbPpxhOmMzZszQ9kfdd8kLwfMMDiAdc65c46qTPOyqyqG+7GeeLv7G8opTBBOXQdAKjXfchuDw86XjC2643R2w89bC3QOrwlNnPuMemMHFqGFsd3qz+wja3Sh8mVcqAHoNtlwM8oVtlHHqtIfclEdm6uVHMviXvXbWhHAWVpkpd2N8XfQDW28caYlz1SScRsS2jicxXEHeBGf3y8YA3Tv1AffCP3EkKsskgTQq9IX+3C5CnqYHeanozGRbpGEYR7kGMSk66ezztbrsnWDaAnn8ZX1yxRkr+xtjO8r41VYQnD+/vuQ698ijGIvImHjgx7qSOhBM2ayfB3D2/ZRHn8ALtsuL9sxrb8XTDpysE3A0WdMEw+vL1uLfekFfAV/yke4av73fQHloWH5sAr5kAYnjwvkT73C3Tv1ft9laq7sVsDBBu246bnX3Bbx4+rEvT8EkB0/k+CE2LgTQtp65ZykN/w/8BJ2jprRHGwz1KDjKyCCfy9fV/BbWtw7PNv0N08cUtBDiqvwq33SQqOYgVcBvw+kSAPNhrPCDRZckGVpiug58HseLpz879beRPg7KEeIjm8Nh5soAw6MYNH9uzrKcpEQe8v0jK5QCeWYWthtNdgjAoK6AOGEsr8HeiyMor7zmOncf9t0z8CzqiZee7zbFF8kMRxnhR7SIVzVIMULcFMmzMrjxk+JZXkpalJfha2Cr0azOzkW+JrjA37LsWuI7P7Amvswr8RbcCJuuVh464gFPfcxu+swPN80Km3wQskzBSQOXDW1PTjqdNz5S515qBL/dRdH6H9OrhJHktXQuIXoYcYo2Ah9NPphfIWcKzgcdDeyfnXjbZHfHdptry4WhHbIdvljIvySobyF954OPuol33OVPeYE9pmGrxSV42e7deJGOYY3ll3VfTV6IFBA/Rn/yXy+FQ4ztAXx0DhuuiRckj//cUYbm9jrqC9hDjC8awrvqm/eKOwnnG2+JFzAtvAtbPPiXBuM9E9tuzrvmRjlTrNct1x0b5Rr+Z3eqlsvgdv0DXjL7I4+yhA7DdHZpR/zrw4o665uyuP94Nl6QveS2u9y7N1nfzXz2eTdx8j0opM8nLx19CFzezEmzAU6wuStMemy7zxM43g9ZrA3hrL/6KpoYMf1ObE8g3ePPPCNeu262rrsRR+ZN5xNClG3UYgPurK9/2q0PB2EYXj/9IG7xsDZDvdsChZXgbYj1gJYTnvEH77QdRuccrOrgmjBTFHUKfxXnPKgRy4R0Jc7yWGA/5uyHp7j0oW2x1fM+gC0vxOLebdah9OK+dI4JureQjk4YyxPsR774k1MHOq68xjjT9NSITZK0d5k+PoOZlUA7SJcKFAnw0USC22XQtn517gVud5w6Y/vJj95zu5xCbYNAbcG55AqcRISn4nxiACf3BByB+tPPfUI0o7Af+zsH711Lf+FNk9wDeIF2GF8/lc2wev6Lb3854h/1je+727BQxr3ig4twogK78L6rBgebqq96e5BI4x/0QEQ8NMnFpMPhPZqT/3CGttfIedWEkgXHWIqnAv2YcAzg40JHYEKx4du9k00Gp+IrsHP++bT6gLb4wILk2Q8ZfBGYfWQQE22+BHv65dfh665+Rfv0S652Q4ANBv349INPPoa4mg8anpHfN3QlNYZzvbpgj+mpIHX3/ZHwOx54SG1nYxzVSboZT3pdtsdiwdTHnnAXXH+LfxqHvF8f+0m3ybrjfLtgG2D7YxtjQP7/qUB9S+24rhzsf6HOVU7S8q8Ofz6MgakcGHcTRio84c/1Et3cWUAGy7Orh2IM8Q5ASI74okEi6J0OnCNhSCv1qledTA6pnOAyaHhFeetwMSwI12SrTLCf6HHV2atkFGA8Oooz+iOPONwd9dHD3X0HTHVX4qUhhnXGjRXdLXA6iMNQJ1eZdT81TYZFquWX1XEd6wo8o7Fu3yYjwzMe0scS+bWNplCoNhww6RJWqytY1NmpEZ7rX0pTN9MPgyXvK22lCjfqaEOeFEIsDrBGS0ccq3QYpTHmsNf6wBu7X2H1NyRNACJNSaEEVsIDLHVuiO1tkNBlUbMrwbEMLFPo55ZPnRWHEfpxk9PLbVhl+u6vz3Cfxcd7tkoc4UyEknfBOf/eb87QqSd81E8r8ab536f/BU5mv9s1eexeov/J2Re6O6c8gBNTcMOmMwEdSWf9XjR0nOQE4eYLp+BJTPB/fNaF7uM4gWUp3MTrAvfEH3faOXJw6Chz28wgV+6s8HWEGVyOGmh17jmIvb3Ajzd68BU/bFcZxvF6p6A8l+HIuifhaDuesoGWYPK4Os+WIQcCTA7Co/f1MBlhDWyIF0SJx+1F1JXqMv2VA/dy02c+rdXRsSu+DZ9yf849ib+Ddt3OHbrbjm4a9qLf+I+pqGRMbLBthzR38Ix5XNE4Jd87BAL4kqX3qFJ781jQtDO6b5cBMeIHWcbAslO5KW6KR32Ix2tJN/Q/jvFxosk2TU15pdGUQrlDv7T2Trj1S+ZJpN4hAZzONRx4rqwyqL/w/oCQ9GomgIs2qnIQ1/d7IVKvaDFBkE2+kmQAXNM0knxKVwjShD9or+xXs597zh2Dj3/91zGfiE56gQzntz/nvsZz2HFKyxAcYC0YzJ3nJuGjRd87bYL7UnBWS7SE8ez0//7DBH+GO/oaQx/O47c2LAD9Dp6IRIeaL3+rmOy3WH+GDXl6TYrPvf6cfLM4qjdOHjnBAR4nEdzDb08raR7WLx32/rnYNw66eXixNeU3j3vyMWnRGeXgSouStybLoX9z+8y8F2e58y+/2j32yKPYIvSym4EXwIlNJ578iEMelMH0eGy7+9W/f0pP+tbCuyCE3YYtddy2xKbB9Ef22BFPqVaTxE2AL5x7H3AbrfV29/1PHe5ewFOJs6+aqHLyPZ61VlnZ3fSP+6WfWgjalS0IpW0TDN/4odB/qTTMUgl6CRjt3vcr9COUudWPgMo+UcOrwqiUqPSnFkL3K+g1DFqsamKBTg4m4/zT4OMbLAvEhlgJdBYWQPAGNl52nQ/GcmZ6oS/LVGcKFanS0x7BTiWHhTc+sxnLRMcrwoItmU+Y8fvDORPciiss57iKPm6tsVHpm2+/w/3xnHMjP5NrCNQ4bZjlEgAp6Gt06TU6TimQJFnaknX4yi/IKYCgTh33erlpGero6+ApLe1Vi1dT6jqaJtuLxoyWX638ag+wRbjhC83aF2+avEEDV8f4+UxfFE7YgMfBVk4j9cYNny1KfZR5oPNHugGXIV1F8JAGO0SEEPEXs5upX8lEog5ueKp1lgd/eQvQC+mCogy8KcNBn41H2Mf9+nS35fgN3Kf336PNEebxgXyp6m94aUrHEuLMcG4LoSX4ISAqdMLpE+RA7roJtpzAubTA0yYewja3v153i7v59jv9kYbcTkIHi7aHvdRvjQBpv1oJ3XBz5aP1y6+/0d2F4wyPOeA9bn05uYaM/dzSbZI7/+qJWNV+wW9XAQ/to6XzG8aUFkVzTA6ZaNiyUDT+cAyhs0aHBPGhudguAMdhNpyCu57l6TbAYhtC+4ryYFdOQPikgrC/Y7V9y/XWgsO1hHse7wCdev4V7smnQasJiV8JPO+mO9zB4RPvj8Mx/w/UCc9mPw9felxu6TFu1y3GuzUwflm444HpODXiat/mWGbWee48+mIYSeXqnc8WSKhJg0nHXeGCf1uQrTy0wi/BjfAEJgpL42qLLREe+qraMPsqAx0etjnZWlZHnaDcGPyxjopqQj714c0AIW53YZxOvIJ6LyFKqQ3TduRcKkssMjCob4Lj+YXfHJ6ngVb31JoihrHnHR6kto4N4ojT++6f6j73k1+5oz+4txuffgALuNxfPeHqm9zZl+Hcb56RztVzbHGh09q/CBxmMLzwqmv0Avi/fmAvfFir+iIsn/j8Dt8xuAiLVIOzcawq5Gl1muPZov6eGUoFK1EvlJ3DJI7yVPlZD6wSPoXjy7JJWQfpiA+yf/u+OxTqgv29jyvd6Pt0WmVL2JP3Zr5Uqe1mGI9Y9pTf0Ev4yihhkIUMaoP3g7mSjz4T+tYgJvxDL6McgN06Ce+XMNDxh5xBOuXQj06+PigV9L32jrvd2FVXwulI/qn96Zdd4y667mbVka3Mn33NTW53fARqNLbSPYejrU/847luBr47MANb4E6ecIE7cLed3Ef22sXLw+8jOBL3v36HPksn32sKPWAo9U1efZuLBG/kSKpr2u4ZTwO38ACGpQkPDfWtrT0ot0JKn9KOMN632uqrd2XJrpBKSrBAnJkinHzyye6z3/gOzld6s4chjwPFIB/DJUEzsSQ9v1GadEGEQcz2zaHohl8vuCm/bukWFF4Tn86WK2CwkRZCGdpCLOpR4FXEC2xKebVyM95ZMipW4snMHJ6nSziRaRIp0Yk2wekYNeXDVYNGCuONgnsfzQGIk81+N2a3D7oXLp+AD9ws7sVwWYWBAxedNQ66YRCjLTmoM/g9xorW/pgKEaENEHMUKWXX2SdS8iQj3LBK9cySiB4Oct8AT0LhH16WxJ/DS2Lr4QxuDroMLOODWI16CSce8cxnfqmPNzvyJo5sh8fqfPmMf24R/i3i3rnmanKBHsaWjBfxNWN9yIUvsvEGyZsteVM+bs508qUPb2y8uXPiYPzpxEs38BX/xcSbBaOtpz8G3cDf0UGh4w9aaQ4ddAINvijIL33qpVA4fQqhKlGZunly5dJehtNLonNfgZ5YcaMODGwj1IM3I91wAx2cDrUHsmVborMtx4COB82DDOD7J3iwFXAkE7/Ep53gnbjvHHko9pav6t739R9Bf8jEdgMd38fH8nBG1KYol/xIx3JomQ/OB/XkHxwjv08a+NSHIZbTJ+03dUQjzCLJlXgsQxE/tP0EvQ2vRNfCh3JBUdnFlOYV3iAnWFqBBUHsnyj7mD0OdC9cf4GvN+T5ibO/qr6Sfkn5tB+DTv4hfo1Rcl0LxWsrnxjzJ0fO0wFxkBPILJhc317QhnCKSh/6UD9OIuHXN/twChFPbdkIR/yhFG4mtmE8wW0W6Efcdz7ED2yhX3Gbh8YjrHb3s0/j5WmeYDSAr3eOGj0apwGtLMlTH31M3zqYB5phOL6DWHnX6jbbGdoi/7gPne2dY9wwVry56s2Vfb2vAcfTfwQMffZN2JqCPik9QaeTUqDHICen+BvCar7aJGwufwNVq/JaXatEHEPQD3DajL4aStnY8qIz1DFODGJFnbyoh7aogHaAiwIoJ18SV79kyagr+yP/2P6Dg86r+gtlUS7hoR+nPpVUYvnR7o7Yb093BL44fMwJp7rJmCip/LQ1bMAJt/oe+qPaJfmxj7POOWGQvTCh4BVpv9WNstubCdV+Q4dSOw79yfRecslRKhzbiu438Fv/+3vfch/92Mf82BHui219xBg0XFmNpbDQvyRqzjlrjY1G9w3erNRKoBIGKBU40c4GqwTUFuUxRN0GdhgOVuo43RIV8IZx84t6F/JLoF7xjUcnXcmXHaUb/h1x6lqHKdNwreNdC2/ghcK05dbyKeCSuA6/jXEAlOxc4lEUlwFJV1cnJZ6pTk357VZJKbN40En8GJejBBwNsqG0cs7pQHm4egadIvUQ0HDlPAz+Xi86TMjmwIQ2p77HAc2cQPJpCpmdUtSS/S2/RFa0E29CUtAo/ZUqS21dEUOZhuEI0m/R/lE4evfcjWPdWHYI8zc93mhwY+LqGB1B2oEB5WV+Hx8fM8kJAVbwuDJ+9z3/8NJ546SjS1re3IhDOzEXTiZXm/qGkcc04eStfCrENFB5Y6Qc0g+86u75x72xEDwhQg49y8A48DRWIiqnjPxwM+eYqnrPZ1BUBTiaYEk/Xz6vYmgPSEg+V2m1MkjVqGfQFXbqwwqoygm7kyWD9GCF8SZOW6KMNuZ6Bwh2GRiG+oNuLmzBFxdZF1yBHMaqoLYgkQ+ZAZUOBReoqJs4saysF9KSP/XgRKIuqFCkbQ85zMvweGmeHBGADWZpYhqMcV9OxlohxY1QCQIl7cQ6YmAfYlkUhyMU+qsmOoDGNGhVbthBfUATl1a/JD3cOXKBnWk31kArKE27iU8CRzTFsxybkFua17YysTw1If9KJtGq9JDK1Wq0Y03Q2HYRH8SEeBK3YIoADYGOH/7oBPr2gj7lc0GP/2zHoCHvQcRfgBN++z+fCeSgB0+/bQRtnSvanOwxoG8yNjwPNiEPxulgsZ1zPGA/4lMKSpOtUctsr0gP45QX1jnpuC+dZugHzjBe3GUvsnKymtMgyeiTfZwgcByhA4h+MMQ6Z/nh8Es+6Og3DYgB8fEH3dgPyVL8qWsoy3A/4vSH+ngaEzUADhEJ41Yd6dZShv1G31YAj8HQHzXxxURGL5tyQkNdKEO8pBDaFduP58Oyy25sj/wHXfl0QPjUV7E37o/qOlGPddgWhmC/NMC2rGWNTTQ3x2AElp3l1aJFsJkyevip83l5Z+syjNTkoAstVc2LM7fQiHQTgWVMOXO6y5IIpRVDbuDZjfLe9qQrc+6GB3GotwbHbglSvB70FVknfOazVXXCI7MucJot0yG3Jrsk1jfl1DBZvEQUUNpsX8BVCynqUwT6FpXzydOQ71teO48U1evHDlzCa4dlJW8lM1Qvu5Xd2I6DbD9EYrC2Nss+hwGbvBDRYMKYdIU8flJ6mJNlAvGj/XaMChBuDNr7i7i1u0I5Sc7QVs+NuJ6m9jeh9fp7zAhmJCZSLhxOaQleqRN+cUPRzYfO8wBuMrx5JbRyTjHI2golCMSDXMUH91E60XIceMPXjdHn0nCk944krryhqi7xQ8fSxjrCqBCdAcC9jlSNtg1OMwZ/v5rKOiQusPCnGzVvAsAlD94vBYMgHpHXh7OwhS9tffmpnQ8kQIz1Rz0DH8kPzjyz+RLfMDehgjdRRURdFceFbYkFw9nbLbtTEVgIzgJNxHYlx55X3ujwcSe3CCRBrh7DY0VTNsTKI1fG/YQD5aNMCK7UCVWArrIfnRvaguUjcilQ6SwvqB6xZcuIk+eGosZ8pAs8yUxwGioJRVyjJ0/1RdgQwa9Mhrjsin7IDDqFZCsdfD4B1i+JFLey0OCiCuWArDbbhPpN4bIBSUOgijEkZSesWCavaSRpRcAoo/d5VTsRpv28cHz5DgUnpexP1NEXie0FvNBX2T7YdvBDZcSuj0+DVC6/guvY9rX45+0lfLZzOpOklVPuadV+wEWnIEGebAG+8RraF7E13rGvoLzUsx8LHNKL/UR9iFgcUz1v0w/ASvClZ38gGM4d+z6fIkk+gNSVeiKw/fOfOBKPziAYWB2pbwkTYOzz8eVgPpBAS9zosLMtkReYMUtnrGMVvx8fQOO+evbHQT6Z4L559MUhPFXTEwGWjQSgVTudyziT0Ie2R77aBbWUoj4/bWOeoNtfMekWef7weC9MxKmYOcfQ7Vp1jPKxj3IM4hULFHyviPaRncQwjecMe093/yVRb/veJNjNK9Cq8XP1jmkNRr4B9tvM37gzrxgSJbTiV0RqAFKedc0GtJosv2830aEGrwQuNoASosE6ELBt+Ru4EdRfhdsNv3oWvgHW5Kc30xRFclMA4tYn6jtxg30LWSU+JblRjZIdMlidvaR7AZe8qYcvm10BU0P3kj3PqEXHSF5Uz5s8Q6AeNsJkOmmwYB+yPsL8MI74CHkEjoHW+Bt7PxBhEFY+iHFX8WWkA+FvIhGXkUwHX96obUDN0y0wi5KxCJmtS5pvYyFzpVfITCX4MgHCPBDoHwZXTUZ442c5eN+NVvUUuunw5gsa8kvbmJxu3ASVhyPuhrFqxeApGUGMd2ABIDFctXeYK89RlldLxCLz+oGh58abX1rggGi6kT8pxJeTDFYVb/BBH6JLdKBru9AeKh+xyMmCGINZuBJsUaqGoBbOggVVCSMvjaw89o9p/eKKMugceqye88Z2xU23urunTtOLflqhg/OkVU44KvQjyJZVE20OenNaKJdyZEWWOchQJNFF9W3yW1iGLR7EifSJnSMsYiOisvpyVcFSNAVF3hmQBfKgpF/qJh/gtmhVlE9KE096VjbK34cVXjlqvKfSsQOx2ofJAlmolVZZCWN5GFI8gkyGMsNPARcMfGZCn5JIWJJnrAkKlBFdLY/82N/mojOqEbRkqw/QQWdJgCe2egLoeYk3aYPD6Ju/Lwh5S1X/g/J56eJDjmiPkmviSAZc/rOJkEAAa1LIPonWR1EKEgNsmN9L9L9AagySYDqluIJBhciGmAjq3LwGtriGHAEY5zig/exm5ICre1BSF/pQGCYx2tuOLS6T7robk45B9+hjj8JJx0uqerKFSTPPhE8CJwHqM+ClCUuwE3Wivn144mDtyvqupRM2zdFQ/makBZPLsTJv78HsLTMHffQEEC9b8wmCGiAXHOikawyCAUgYiIXLiU2PAU2oGLCsYWoV8xNgqPEE0kuUe6EiBw4yrGg68DRCrgI7aVuowmxAa0NrAljjShpsE3qeR5lyBqCzNcIcpy7dE34P+tGmVcvUaNADzyKHBvqmstXpVktDOWoTBcoGHXKda+1S4lGAib4Ar9Wb9ZDh5+kua0pFqdU/LWhqojROnKCL+knsTxwGePNBv2sKaOdyRNlP6cSCF8/R5Y2CZVK8RJ+V35chVwyEGYh4hHmblxgHGGWHQVM8gjy/oisunkfGwvP3Qu1XVzq0GS6TEScrTysv4FAX06fCBxz033NKsyqQKJzIupV6VME974gSmHh64vO/T7EQitXqk2rQintqcCmUs4WFWCqrkuETvk6CNpk9LE8rhsMD7pqJN/k6orND+/Nmhit1MdJYFrJPyiRbyE5ecy8dv5a0a8hoyY6YiiSuecwwO2cslJ86Q0Yg3kW7GSdgUnfhJLAwaVa/DPTxXqb+ZhL8NaEEL98HdQ39EhsLIAZ9FHzlpGY6WVmtrVDvjvWdqFAqOwqWYCTRWIGwYlaWGgpPnBod3q/hEixnUGViCSynJTOSWjsBiukc84SOVLRNOx+hEAwc2jQNxkfZyIjUigA/8jWqiGGA7q7k4//7tgMqk11hYDgB6Ns5cYvYkZfQWf+IcMWdJrt98t3udny9lQ4n+6GeNnCcL/EiLYlCEI508XJTM/TazsTS1E9kmKwFfeWkKg+tkvkcOfGGhHumPd3B8wbYivdQPJnBr/b5j8ApN9b+aoWvQrEHvQqoS4XJZ112LZyNVwUgBis4wbS4XTV7Zn7WuVskEbMFeg1j/lQIL3ChakI7pa29oYzUoytduuDZyIedpk6nDrwb+eZlo5y6UJDTxLuYVypHgS9VqKOvq5s2/DZZvmzFwa9Q5jZ+BZw2kK2aU3/VF/uccSrYljoSV7/ZD+2SgoKDYOW3G4OhVHAN6IewmFIkU6PSrJK8CpyEmT5leb4sCZtqGQIf6QEBkYfVlV2F0NtP5NUbWSP2SHmy/CVaswvzLN6oQJ5J+1hgBWV1Ylm8Rkw6kPgvCG5ktLqcSjrmyNPNnNkIdmNP21apHMIVReEn6JjTRd4FkkJJz5oAAEAASURBVBxX/At8TK8cvwRX+c1e7JfGr/b+1qozs10up6A6+jlOI6FdbSKup0Me0/goBfnd8DMZspclwtXKmYHbkiaH8i2eI+V5xrsN32yYM7B0Vi7SW7nbeBlN3bWTLNA18SzZrE5UE9z0b8JRXlb2TvjSnTTsk9xOx5Vhthv0RbVPOudJ++nEL823+iOsyUYpzesWb+iDppM58eaos0xt5Qr21wI0nwZ20X6Mf3qt88O734PedrdM2dfESWN/hqJtLwW48q34djWi7Aqe3W7vyCjnKzmEQVbOCSuhR3uYU9OrAt3SdbCYF9tB53zAbNO1gb6JVnkl2hIsCK0rdwNJm7qUy5C4YQHQbq2SjpE+E9oEL+ndLs2rMV+/mU6RVwXuJatsGlqCJmq/YQkh4FfKxME7gRf1R36prGU9ArSiW8T0LnxBiOlkmLm8mJ86P0CO8ECYpo2HbqQ1+pi8Xq+UQ/7pjcp41MmdHz1MjvGmrMgvjFGGY3rYNbWJwRbENZfHavV2Md0ohRD80THAqnplZRR6N+lm5cvlkKtCcWz2HG0csCvxiZ6HAkgotTKZmzBqxCOutXW7EsagfldY2vO5Pt/i4Rp1TdtywsLKKp1SHKM3BrkumZyYTMrZCMM2iuaabJmhxSfGKpFGexb0acSvcC4kCvwKWLWgdIW5FqmbjC71YFnrxpw6MaxytgttTWG9g4ccRLYPfuwK29G6bQ4mY75s3mJisYV/5YSkYwhWsH7Dq+K84j9P5GEweIrnc+b7t/s96PMtyrl75i3uVjzo03oxy7PzBeW4lIbKgJ1mpHEzVApb2PGKotD9/1iw9vP6qb1wbVbLvTajzhI9E1QZZeRZsoo74lQPXCOqj7AdpEMwjw4btfO+URPl2407d5cir4i+8CJtstoAXnZyMyOGvwEtPLX+f869WSA2pY5k3WOKlVV0eu0oY2QIJc3U1kLbs3ZH7pVWWiCMfS8+lgYF8Pz43OLEfjl6mz0Thf22BA/wjLn3WCHyqqDHRNFZLugWCeY3wntlgX8BNL+SCvSvjZRccDIM5VlvyHSpTVTabg9aLxCLLxAmXSrdRWVZ1yJH+qT8orafyQRFwePJeTXbRas30Y5KJXPqCu7CP2ZRhfMyxy02x/3pnJ/5BApge2Hn8NgwBhqAoYvHD1pB9yOap+nhN11x6oGsDXWkfHrpBL3I6Ap3hDZj4bvh31i2GtmNNA1yc31q+dTIDXfEjvWay8kJ6uQaHa+20pHTMl1Hb7g2kMaXBkkQysSo4BEGbOSpC4Wj3LRSwtVKrGpJGOKeF/BEBx7MZ8DFD0wYhIinva74VTZ+8KIjo8IxPgTgr6Wf10GILDuziYMgOuHzJwx0zAz5PkLZNmQFHNFGJLJSML6WLl4bkLSSBD14ZaCtLV7kBWCuhWmYw+voX2+46TsSPawtGq3Zz9Lx2s0NMCI3RIwP69DiDehpVr6qV/JhjWdqkxSPp3VU0kBUPYsgUPGiLQK4Rjhv5qANe335bR4FwPr1PgeyyRtAblGJ+cBT+zO5LDP+SweV36f9S5GMex56kZb5oJOGgU7EBMU04+EPF58IMpUmKhFaVxu/QnbrEvBagCRWk+c5J3iImrwq1Kca88oEJahgJdk5cpO8HLctXVPmHK9JRlNeG58c0GO6F1kpa9LZvY3wkfJJeSrepf3a6EYAsBfPG0ltQTZs/1liySVVbr43oxfycW79cl/9iu/DOaMeyxLvnRmf13aLiwZZjkB28w3a5DfQPJ0pHZM9GsHorEHN9w21Wz1NcLjaQGEDX9rYM9Rq4+8gL5arCY+dKxdSShd4RP4lfIMV6CwLhYnRNEJokw1S3DROfdKyiHtJPuUSbldjQvoCfixnyLO0keU00t8yC9dIT/mFUIamiAGDTisLHAnoOPty6UUzDCi+o8ONYjcbCF4BtpV5pxtp0jLBPoi7PqNxcKCTjv96WUhdFMjA8c4546RFmnmM8w8MTaZS4iFE8WY+bT9EOOK0ndeFiiCYjcULSckljq/bgBVleaLWL/M954DSykpikYtXuZDTwpDGYAauVl9BRyNLcQ3GawlubUVtNeOT0qbx2F4CMOVheAazdEpjeSnM8EZ8NVtkDNIyp/E2Qyd0FbwEXoyGdiHrhnjX5Yq0nnMtnSkUymhJtSi0x5hmPv+ntlAmftRuQUEHWTD0NcTVN6QHgYjg+MpBtm3w8Cc+EI4/ZIkWfZzOg06IoJNO1fGjY/3CY3nK1x5itCe9aEsU5Hk4CcCPbBmTzsT3aWXJiRfbAAx4MWW4nqhSXmRJDmWndiBJng5s4iXJJ2eWzdSKOCFiMko82+TmxHXpRH4JpahLB5qUT5E+RQjxRv17kFeyTUFcBdQou4LZnFjQfDhmLSiezZqH3G7GYqvQgGvjqvHXezRMMN/+LG1I83ld+Ftc0OD4ZnB8UbRJYWuc3bwRq4+TNDF74+f13CDNPt00robix3bXgDPSLJYpb8jd8Kqj65kXbVSyj9kuyze5dk11LcGYXwtHnm6ogQnxGKwM8213K0OpfJAjeZanmzpu2nCMdaowhPPz4LINHQDmy1SIyLlAP4XnzBs5nWMGOe96uw84xGcci/BysE2OHHLQygFnnscVA8C8M44UeSJPUwagSAFdhenpIIH/FIAbYpLtgZ4sTigC0PDsaridrhTPQDqLCxB/ylDpHnG6jdTwKpLX4dbByaSUV4IFgWk/sHZV1MWAZV692ty41V5rdKmAre3VMskyjDjQ+frONFcSZRRuUlb1CfYNIIA+dXT9arWHiw5R9QPgsteRpfDpqLMfhny9GMvJNk/OoCj2S06uEe0Pq3Zy0smDcvVHXqF/EERszcLBAPdL388oM3HGMzP0krSxK6epg+d4MU3da0Jdjsmwa0pegqX5r1e8riypPo26N9gp5WHxRl6GlF1HQpOyYBmTnpFmzXd8fnXrWYFufMwe6kQfbeoBP9dXt+AciPRrssVFcuGkUwlVsAYhrhRggGLICtZVIzBaz6HnX3OaeiZMCKj2guDTc7NvkCt9MnsmKrdFa21tI07hZlhLY9yN1tKla4FvyQ55UXJ7U1S7PoD4yilJ5t2tWm9Mi087pzZc4xhoLMmrqAvlmt92otsy+UZj8PZvATHk+Q9ZEId9KuQyCy/h6eBedj6uwGkVnvjeOfAr8AGfi37B0SYLDZoqj9wBOAH+KlXobQQyyaehRAuccJWGWqkHL+KGP+9M0IkJcBkICgIALsHZCBM9IiWB+cLK4AlKEm1G8rw8OuPEtmvCpC3qqyLoR5pQL9Y2mbZ4G/HrBDAdo3iZJlig2UxtNkntFvnVRuqxU1vXYwXGNQg1YE8U+4vxaGG3YoniBIqGETrUHssmrMzzdoTBuLrNPkUc/PlugjhnoMgWntlVeH6FW40MKHKudSVPOtjY5gJLc3FbTr1QwJc4CKlzLiTJTeEtXPVzTyWekZ40COKZyoHcdERR+xVm4SfwYKMw3draVkpm+AnMa5EAkmgTr9q8goyEZYyavhEQIqZPW34XfGtpcyFMN/CrLVuJTwdedSRN8mtp0gzq7we/FDpfcetj88VkJMQNdWHs0jrxx8F6f7VfT6v8Vk+1GS5AawAwyt6v+aKTceh+i4tR9HKlE5CtdPvHdxix4KTbeaPmqNue9NQwdeLs6Bvmj8g4qKAR0WUKsYKo70h4RZouGksmtr6zz2dDaZNT4MdBqW0wM8ICvmWl1yJ9F3Ys0gXGMa8bexIn01X1mCpp8QzPwLJDlkcdSu0h6mbEuJZgSbaidInr8Kr1QEwfpBIScoSH+SEdTIYtk1/ZoMPAbS9EB5KuJGJEaToTgAPENkqwdFCaCdzO6awTyHw568QDppxzv3LPPDElTLiShCgwAdPkgDTCMyEelbzFL8sDloKBC9VoKLiavATUIUo1OwWvV9CPyIFIcEtT/2j0do6yK/LjGNCOEunrcI2/5acs2mDdFCxlkMRz0jydoMaot3xMViKxzoAU8RpsJeJMaKSrcE4SEpKkGc14EEQ+bL668lc4/Am1GbaDEFfZRAxPoITLNILUR9fS1yQDrCXOAP6qHo37H1Oav7JPMk2AOlVQgzoAJv0Y4cIWJwbCo1TKJW3Q13BBJxyPILwh4MkJFx8Rgk7/ycTrYgYiThbaIQEBuK1y5kRUCLkFfl7jKn7t+GtoBT7Msn5gaJUraWp0qOCVEjXyDLXWJoYQro36BZxaG2a8YrKDbhEvjYyEJqcHj551TXlk8W5sk5HUJlkfauOpggCydacgMuhFLv1T+pvmc8atLQV7mi9bq2SPGQt/i4u3hjqJ9s2hsDKkHvFpRIsFt5n/MPM6BR7XOMKQ37xYWYSNKIBWHbVQWZ34iQ5II5U9UrpOesX8kQxsZocR2tNsEnXIIj3VlemS8bBkyX5qm5nuvcjspeObHs3XxCJqovhhuQwcuoq/r3u49qsSHm72+rAC46DjpY8vj4aVdpmI5aUjQkdaCLgoTRLAANeZsIjOGQ1aoi/a7waXhBDS4qJegDjR7QVPo2H5BFc+EYBNWQzh4mmsUMTwrIsrC0Zj9GmaMDFt8YogE0Z8CVBO8w9wPScTkgz2Bso50CYIYWRIcgNBHV2CqWiGl5WoZbuMrh6PDJPcEE2hUWSClrGvsKjkxf7mufhfz4hZxluQlH+kq3ADPikCYopfRWulfGMGSQE5gEwHwyHYO7PIMbqUnDBLG3/2DfznRFN5Id/vP4fWfFLFQByigM5eAh2YjS+mzgMQL3YsOosfayIx8gNvP36QKNgLcGZRlqwRHHnPN8ggMoN4hKtAnlbwtjyKABLxQl4c5wyXPC0UYF2NdSU68Awai7vJNX4cly1u4gNiJRkTBRlteQUc6hDbQyTIIgW6DKNzsgOPYlk7cB0RTQeeddmUVVsndURdwBcoX465+sPNCP6j+gcrl31RfYZtvdXqunGkrR+nbaTinNNx5wSZIeFdifvcjr+8XZdC1yvoqZIlRrUwFoLOdFqA3Em3QgYmNpjV8mSGDYKMhxsio92EWE1GR90s3g2DBMd48Vpy+BLU2uiIaQs6mz4U1o0+KX6dgiU+nehKNCn/nD7FT+MpjcV7bYu1/Ar2k4wCnPoW+RRwSzyM3gYl4uQ2EF32E508ymHBgzw5vMLF6jg5xXyPoyZNxzrA1f0YB6r2yzGP9GTEMYxZHGsIZ0L5xOhzg/jE8ew1FnfzluHXgCkLMjkCkh/wQEm0Fg1hyPNbAxgP/BnBf/9n+UwTGK7EVVyQFr7RAhxtIrxAG9DFO8E1sMErtKIPGFEHn7Z6ki4pXkA3froTABbxhGs60S4WT5l47EhjOAlqRU/LNymWtmuAi594BEasIwWkIxwwA9vVAEh7Svym4zV5+AZUgXsHmnkSUsnzwIgBco9U5G+y1KiBZ/zANnIwnCAq4gBuOC0ZbMNhxbiCX+XNLOlDefZHoOR7XPGmbMGQJ4cadEzrz5zrACM9nG/RsT+RFjQ+jbj2m7eui/1znhs1/WXXP7eFR6e9nyiiJb8WvbcfMmNAXCvwyME9kSTUS7SGZvpbOpTB9rl7okAX+bYiZtcWxMeatifU0ZDSl6HKLYdZmnw47jbxi/pXWSrVSAcMM0lO2okux29Mq1LKGCOR0ysN8XXvatCjrF2Agq7OTo10DZlWhgXCl+MgdmroNCScVKYvfvIJMf1MfogJE2I51smHhKx9NaiIxhGc72iGkKYdwdsC+4HaKH1dAy6ga9cOOjQYmUh1LgyWMBg5sEJ8Y+Fg4nnmlYTu2ChLPMiN5OKvi6dBJpuT59zIprnTN5P+n8iNHXN+tR1Bx44kbDdMdGw/aY2l8XblVf8d+bXTtUFCx8rhNnionSaZJXuWYCQp8TCY7JHwbYzSfECoWqQF8TN6tHjZmWZm7/H5vKoemGTQ8/RC7wKNzIlpvJ3YInlwtOcs4dwL6y8RVrwxKJE/Bz0SwEsRa07/BccAJocdOjMPcN/FgSWGpGEEebyIB6/4Q4hOPxOAsUwem2krBHkFAuEFeALzEwNmIhAe21864CY8gFahER1gLB3RhBrwIxnlBtnCt4xAQxhD1DvwE0w5/kdkno9+leZPyjuJiz7gW5lVyaAgWaS3OAlYEtJ4vrFdR7YhwkuIymwkRRBLwfET8gm39mxqEKZgONDLcKzOfBZ/+SfO4ZdJwGJdeRS9mIyo4SqqH8+JxL5sAJodyFv/A06LqFUdhmtsvCpefMgTD7tJo5BySNnWyRv4vmpDGQkAHR1rPVEiHXC12NTv73XcFuYDrsjgivucZfrd3DePdmPumu0WfQkwnPKiMoEdyLwQyoTzLTsrGzLpDJAd/oimaTrLAB08HjKsHAAz0E4ysQrgITmOEJOfWH8JTJQZ7yxbsnJYXZoyWJRSUF5NZp1u4tNBv5Isg9WIs+yero06itNIpPVKE9poT5qnyL3KS2nb451t0k5TC2Fjh1Pev8gijt8N6FtsMezeXMwtv9zb3BNPPuWG5s1xw3NedUNzXkE/QTnmcctnd+WpxWLfhlyWQ2Op4h5Wq+cIMxZhn+4m1CrbDTFwNJsJncYqqM9mIZzZJGE427eeZMm0ckJgFB5TxdFMafGGllxZxx8HraayaSwLjBkforFDeqSX1EbxJtgls5HQkqajHDbg+QyS08SjSUao8zotov4Bj2Ji+2jgGztHk15JXjc8E3RFSzJKfEp4xquU19GeRswr7QI7iA+dXxLzhwYNRpVjJryW7TxNwAE6W3d8HEe7gsg79ewpvL2Lq4chBXdAgFdWWDwcqzjklnixz42eOYi+gsf0c4bcm57129VAKh150a3W6k1XKawc5lPpuL3FJ6lqCNTJ4tk1wGN7ybIryToeLBPzgk3LNFXimEKEJbG0dyksVeHUQsrAtcnAxixVi2cZNWItOyrQCS8IZFmIWpRfBHpJkX3Sd5WT0CTRlnohFv3VkLa+1YZIABhZPttAjCuvIKUA8nxDRryEUuRlIHJYafZ0+AVNtFPEJyNC8UcY/gzHPiKkSXSgnbPMgBtabMANYJvZrBX63ctLkXTQvbziIm5g2svqC5oIAJ/3JAbyk3Am6RwI7POURbBwg2Rk+TR0ERrgKgszhFy9BnqMEMZOV7NxBWiJoJsl02sjXYqIeEfcBjm0dV1o5Es6DjoF+nqOdZLq4Y06gKxTfs65V3zSj4Qmlbug7GF6pH03lTOiOOsQi079XD1fdHHXv/go17/Ekm7PHbZzXznsQHfc7890F119nRsaeEnsh199GQtQWFyyvtBJaOaX2qq5lcUzxejJybLdxAptqpMY5ld7XouCzwVaqabYCAWrEwQZGFbRYugQIPAxufG0q8/BI7uqw25gkYEXj2ykc943sKjrw8zJFw+G4uyobx74QkbyOCOlt3ja8GK8W1sYk6br/PDqhbYTbqf8pjIkebRRY0vpIEf0BRyzfWzgucwCjaHU8bR8u5oMpnOaPG008VojP6eTjC5xTQ9eG22KfDpPcqQZhxB9oEvQlDKJy/EmX8AIllNPQvLCj9LqiQCEKx+NA65uSA9Zd3XsMcf895W3DrjRL/e5daYs6oYfm+VexscZ5g7CMSdy3m8hrutQsFWpDeT8usExGha/LhgflsPidbi9wpvk9sprQeKzjZpujM9PiGN3A5NeZDTxq82bn/YX9M51rJVl+A0yS7QpjO1s8YfBCNfFFl3UrcLVvlWXdvetN+Rmv3XIDT445PTpAjnh7I/8qBG7GdoonApufdEKOB0M/g9pxZFu5fl89U9Efa0jQh5M8ydclSaKIl4mk00hLVOKVwdPcdJ4V/hRQU/ZiaZTvrhkPE0nmmRBhU56dMrP9egVP9LXlDXmd4rMBz11jmNr4LPAbMz7B/zAfq6eL4p+tMQSbpFRY9xeO23vvnLI/irV1w8/EIvri7oLrroa7Zvve+Bv3lw0fWiBe5jvBA0GyMpeqQP1US5jJSXK8Bs4t2cV7odEWvhbXFJVUiVYQD5yZ0jhHlLzi0rhfvZF4JjjcUb/mxZ3Y8a8xa29xmru/gcfdi+88KweZ8hkNFY3lZBISkydQF/7aKVhdxDfCVf5HXh0m037xA7XLVGXeHXlqINHtnWdous2xXuTr/lS2ZryqENFv0SXnJfwotKtiGzaSvpY0F0DieWh6TNw8ineTAsvwQIzv1XD32jla5OGeEbvmcgh5+DCPOKRi7cCEOiso2vOW2rAveWVRd22D7zZ/fOpp92sOXPcPPSpefblX/JCyMvqoeE3lKUCY6Jgc7N1jpvyb8Kp1AVFJIxYfEsrntRViWeOn7DqGDU5HRFfB4RedCOu2cGuJZV74Wn0JZtbXnqtw6uDR9qkfiMsRHJaKyez68qS03TiKV4NOrBND+BlttFPvep2nPJWN3Ht592cpfBy2/N8ZwvT67DVxT/ZhVasAPxJV/apNt7ov4IR0eN6AlAEXF82OE2Wzyz886vsPi7ahp86OxThbTq2GHtdWuk0VuQVEJroiNIp32yRyrN4k1zD6fbaSY9O+bmcXvGNfqR00U7Ftmbc669mS7vWY44kBy0YvqMWahd9k+t70xJuYInR7j07b+++esj7Kwy/duj73WwsKl11/fXY7jIX73rMxQYLbnbxi0yht1RoahN2L5PvSh0y6jxdy6j7jO4d9O551mIOWGVbQVhQBL+PtpbM4+BXLwFgUOOMaQCPMgaWHOO+9emj3E4bb+Cuuv0ud+wJJ7mhl2eBIVYjsII+pFV0PaxvZM7Bkg3JHvFZo26lDdJi4/NacL/KCaiVDXp6np7GN1QOhqTxFavBMcRbnEPMBtXQBqwpiDqIpWOlwLmOyQVAcDbgBBYwpZPFLf//Y+87AO2oqrVXbhppQJCShB6S0EMSmvReQoJdmgWlKqLgU5++JxbsPGyABQRE8SldEUORIhBAagoIGhJKAqQgCoSEEEjuvf/3fXuvOXvmzJxz7s0Nz/c/9r1nZu+1V9trtzV79sxknYj8fFCtFY1AJ8GZSPjpxAODWwpRPUFdw6/FiBbxKYNRnvUfJg0X7XoBQ6EKzkzydy2E7AdmMLjMkNJR4kvgFZwiZb0U16ucXz1+okIuWleGTHdHi7yoM4SxRYfb54QDWfCIq3LVGPBBMOXjQc8Adb3iaxaZLPxCf8T+8yF9bOLijW3p6y+qP7FPrcQgx/5FXs7J7VCsN2nkqkT1ivXhtMwupQe83L7OMJxrfFyrQn4+maXScmRARFK10zi5V9Gk9P8b417O1IIO87OXq5h2eKNzNs40QkJeIzzmqZ3UKjzPrQJexdPL4eeUWRVNI5xWaEjPualjJV41yvPrK+yAlzay69Z82fq+ErjzjpZWzZFkeXnhrR5M5wLKhnkk2EpjQVbu4KirDoHHOUYELKB+AgYbJ+kglX06zIWerjtncmo5xTKTbZgRGIuhPKpM6ViKVyMqynB0nqUzCiyZGv88F/TUN7KRHOVH7RDP7EhLJbjiQCMW59Gk/EGnvAwoEYLL9HQE+8UQwWmZfC7XXZBIk+KQnZeTsXzI+xUssBZeQKS+wjJHvSkz2+ooPlHRjGHgnenmdG7EqIfQ69WgZGU5fagTgoBMPWR/oQSdxB80+mcbbyGw3vhMY9x73rtffzt8nz3tSx/IO+fO6UsfeI8tWLTQZj32qHVix0WvlW3hex98eDTq67gNz9FfzXCgexv8ndUZWv5QkVdwjygTKz1XWU0Ys6FxO0sbKoP7jHoPWsuOnnyYnHOS0kk/5vBJ9pspN0BVDGLc386zHIpiI8wL88akxqtVfeDzTONTLvV1nZ2UjqjHEdPWA8JET7Jarmh5ewU8sosRxBOMwCmlIcTlRodIuvAOAnVKBw7yxZ/4IU+aRV3YUaVL5NVGXCCGgYCREGcZ+ecyFZcK7NBI4ZeVCbzbID/jLVtROmRRbwZGaMasUVMQf/znJADHkc4j64lnlpEySJbKIq8mAWJEV4oGXpJbyCyTQRhDVs6Epgw/ya7TuQw/cC/XtbQMUZ9G+ocLw1STEPcBP6bUOlyGaPRxFFgbwA41CGLSBQAA9cTziOWDbHDf3rYYD7S14+m3Dv7Q/MKDpIEz68sDq5ehrOwhR7kh6si1DMSoYQhJS4qQJK+U1ikDXqqX57R6Lqv/Vmn/f8XzOuW5WXAMrwNPV3fS0GYyvk4IgI9DWZ4iGccAbqJTlc4FLnkRSFWxreJXplod0whgP+IWspVYyeNv8IreNmLFIHvZcBcY5ZcjJwV4QY6pSJaAxsxjP9UZGTi7PogiVJSKfSYWqIihNPLY7p2XWJFbhItzpPe8elhQSm9tAy/NhaShbF5Y4E9zCdMeAE9SQfuIr3kXeJkOmHcUOF+QiIpTjuDhLNlEolzOMdyOFwX4nCcczmGRhXDjYp4WNMiWP85rfM7N51rqBb6yEc6a2zR3EcY5TJYMZQC9dEvLSpjTM84APVif2ZgjfvRfOB+y5l15nOmQaq4FDf0ABsqkb0H8KDnjl/kKSb1GP0RzLumpX6pjlEupoTRBhtcFSRSktyfCmfh8NWFtT3bQuTd07nQ7qq4iPnBVR9iaTO17qQ6Yl0kOiGVH1gnKx+cVD9tnL/vSsUcKa/aif6g9jF5/HZvz/D9llzHD17Of/NspdvI3z7ZZf31MduzVzjmumyHWczepS8mq5vGWV9CzBlTKvjWgKjBtDJGMjaFxYEXDOefKef+B1gcr5xttOtJOmnQgGmyN+kSkp/5llj039wmMfHT8+EAbpHbpyV00FO5x5x+vtti42FHYmCjLK4cNVI0NMDYWNECl1XDY9alX6MxqtJEHv/joHby0zF4eyAmOMRsx+FGuZPDKEdVG+ZAlODuFmhtoCAMPlYH6Mc0A+RqgiKcyQD+s0gQ9cQTMBxkNUsBnfXnnp2PPwIbEfV94bBrnwF+DBWUmumtQFU2gkx6Ux6RMgwg6JF/5x2cH1Knj4FHTSiJrB/DLZNSgipGmMlAP1y1BqqSpklMFjzzr+BE/kZdGCXdTpPAyPVlfpeVO4WCoSZuMsx8lAM7VOEqTDXgGkDDSxDPbk9bm0V4IY/4Waw3DljFQ4lHyjn749UceiDoTDz1IIOt0wEvjUqHhoaxszleE0jvPwmnUl5Dl6TxWfapVPFLSTNSj7Mz8rgbKTvX1OPl4nuun/hPxHebyPI9p51FGz3yHM94oeDkdpz5NKzD4OaT86Dq5Pg4vO5fjlvBF+66SR741WSW0OcH5/BpdDilLUGoIeTrCAm0enueXz4uM6k7cxtLRD/0JfcrwTQFDH9ti4HCb9uJiCMGYr/4KTdgXueccJ3WDmGZcYzbwBKetHEYAaRg4RsSz9GQ6Zik/5ikuXGHHZKAlhLS1HGXXwzg/YfwIDnBY4QyYoKejzDJhrmIRFMATHp2j1PhRfzqXnNdcrmA+l8W5CpQc2eS4Yj7SSyMSx1XzGeW6Uwrd9LYPzomaG0N/VD5WVTUP4WKJQX2OPgd9AfJE2Tj26V33sRwd4Ku6op6UAVlQONiJ+nKepKw0xLlac7HP4TCIz+Wae31elN60Ac0R5v22Pv2qy8k5G/wpsw3POLhtKF51n9UBbQI9KRd/mXMoetiW5UJgNbHOvFwCKoP1E/2PDIiI9MVcnt2tpR1RfvpttCP9FtkE9CwU9UFZO2DfthV424rqnDZMmYY4QSoPSOXbxHp51/772pknfURIsxc8b6f/8lr79jHvQBvrZa++/ob952+us3M+/C7bcsNhduEZn7MTzzjTZj0+C3r0Cb4h5FMey8nyNgpZPuuWgWfWN85qLwHarWNJkcWnZQe9W1KLRKyULgZVDBoDO0obntTtPXCw9R68tv3XyR+yIQPWyHFjmvAPf/MHZqhwbJaVc97B11yh8WQGzlHVEkEWGgsrHz/ude+NRsPKU2NiLA58ur3CPHUudmAfINBwKYnCQOa0bLwccHiVGK6Mg1zXibJzgbYSTej4xFPD5AMR0Ivy1LHIkx1DHZNigckHZ/kALXWKjcgvMtx10sdqOEhlgfLQuSkTHdUvKtg5eyUXOOTfi51f/Fl+1g300ajL3GgjTjLkRXw2YA5wMa5BF/kdK14PV829Ql05XIbL9MpHhMMy/Q8FDXSQXdYhU93SOFVl/aZap/Wdy/M+UihjTS65ISgftk4ZEZYKAZoPvlpFYl6ajzjbp3BYX6xDwSgAt+/wppYOOud9gzPRsQK3BjHgspkUQ8q2mBd0rYPWAIWy1jLysTKbe4HK8/L0TFXpmauDerI6CPm46ct4VvOrYQ8cMMje0L5+fyi+llfTNIWxAEi7YGmV5rcSryuK2PXDA4vUpdWQUyGnR6pDnpu34cqyAT3tNzX8PB+l1PALsnKdoYQmgqqm4voy1fMo6hTSBT3qyeohGDf5sS866e3oX52Is79x7FUAS/bLsHKpXiqzZc4181lzFE3F1S5qJdDFeoRzbuDIHBo/CQOebC1SMiE4oa+IC7GAK8YojxxZPh+m+QlnwLKxhfMI9OA8xFlHqkGGO4OuS+AFfYiL+UOaYcyRo0fnjnohj84x88injY4dX7EX50WAkAE70vmCXM5Dmvfw5hy9VALzYrgDDDzwkq9A+/GHlVVe3Gixjfxwx55znRYIKYcSo/w2zuWc41g2xtvwo+wYNP+KBgCwVbujPOjGuLZHxDladkKe+OBigYH1G17TyfmT/g+c834DVE6mMxz4OZqnoYtoWE7M0ZiYg90oG4rRGXZfQXfS5bvQXwmBddOL9sJPbQtg5unlG7RnGmAb2T2BkX972xviEdotMqED/ZVetCP3i7O8gNFuxDf4AG18DWJml4RhjNKmGt9VnmAL8iBs1lNP23w8H7X0teV26k8utWW94BexThjAc8nLL9mp51xo533iIzLCghdeYIOBDrz4QinBQ/2D+sBIbgvR/wsc+rQ6samG32SFvWLYEPiOyzY659jacuK7J9uYERuUakP4Ce+aZD+78rfolytNnQiGZ+NrVgEaxFB5alRoTO845CA7fP/97Ks//pkteP55VDAGFzYkNN/PHvcRGzNyczv5G2epE0zebx87fM/dQovOqpm9otMef+Y5yd5yk43s5K99R52EKEOwVed7nzvdLrj6dzb9r7OEQ/hnPnSMjdl0E/vyuT+yRQsXhCtLSFUnxQMRI4aPsMl4WpmNiTZasOh5m8InldHY2HAn7bu39mQxnwpp4A0Je3zes3bu5dfY6Ue/38ZAHw9Lli2z2cibcs+99jwa/AZD17Ivn3Sc3fHQNLv8uingwXKDP2RM2H47O+mI99n0x+fYxX/4o/3kc5+SbCCJnR8p8ge/uUp5nz7m/aIXAg7UY87cuXrCmnZvZ+eAbaWr6gtpyGo1BJkBu1UqyQJJmRy1lQbyq/Kdp+ud6uWw9FyZT1uiIBq4EwLyJ43aagJXNOobnHFaIXJnNMsLcOUQxh9laTJ1hkgD3g8TU6c753Ag2rHa1w68Dj7A1iCU2TNDj3pk6STSkC7iUXsGauBxAQqHIq+q+iqQZXYi/GPvONI+eODhdSgp4Oc3/tZ++cdr7c4fXpqC6+Infe8r9rd5T1ofTFAnTX6/HbLLnrbOkLWE99TC5+yWh/5sl912Pb45025XfOX7NuJt69fxSAEf/Oa/27znF2QgrxG3yZa4w3jRZ75ms555yk747pczvGLkfXsfbO/b5xDbaL0N1PfmzJ9n5193hT0w6y9F1JBGW/n1GWfbphuMsA9Qh0Xz6/DuPu/XuIG50vY9/Vjlff3402y/cbvYhVOusl/c9LscPvX+849+Y2/AydgP+PkpMpSm2KcCAy9pwo7tuCSU05cgloDqafNy8/qWMEhAOV5wjsKFL5wV9jH4W/1w8Ltg7PeAZtRK0zunePxYVGkCPN35CqnaeFEwRSFZ40tGVZkZVuMIdZazBkesN1Z4DS9vGL/ttjZhm60CIcZ1zm/T/vo3vCc+lOn0Dx1tozfZxE498xvZmE/kw/bdxziXfv+Xl9qcp54WvZxzzGtHTp4omm/89ALr7XddWW44o//2UczHm20CowTnlvPZnHnP2B/wmr3n/4GtDignne4ff/FzwVKxzBpNkUcn7XsX/dxmP/kEZAIXFwOHH3igTd5/3+DQga/qQPYCPs7X330vXk4x1z79wSPtD7ffYdff+qewKgsOHH/O//pXbc4zz9r3f30FIXY+ZM+eOw9l+7Xm6V64Az1s3XXt8L33kE5UiXP5H265JXMaO1DnLL9WzuGcf/bE421LlJMw4od5G+W84y5bhHmbOwbo+J//pc8jl0GtJDQYUFDv7/3qN7DNsyhXH5u09+624bpvC00ANvjDHVNt/sJFoOq0LeGDfOa4Y+0Pt95m1912e2BHjijbz771dfgLz9j3f3WZ4BdA3uNPPW3/dcGFQMCDmHT0Udf0R95x8MH2zgP3x0UOnGpyZtuGHvzjxcDvYbff34Ctyaw7/vSV60yc5GkBFLzkmHOBELojAzKfsqM/90W8MGSALTP4iWsMhNjgoPPcsWypvfz6MvsYtrd0vL7clix9Vbbjqj5WX8PuCoxV0okXDNDrfyIU5yvXIVyGearBuYpBA5LyLBi1GKp4EzM4pXDOsdrUF6/R2WrMaDvhoL2KLHJp5k99+FHtN+JEoStDNBZdseUw6xNsALpSxSCz4fANbScMMmee+jH7+HewKs99uxwYwGvMFiOV1xvv3uRV+Yjhw2zHrcfUMyQEjW7arNnC32mHsTYTji0bxE4TxtmO225t+81fZA/PxUTHRgvex2AgWvLqMvv7y4vBG1fNgLEx8s01++2+h33ppI/YmgPxBZkkHD3pEDXCZbits+Ew6LJVuS7sILzYGb3ZpjZhzMiEg9k+E3bQxc8p3/2JzZwzx4avv74dfdihduXNf9LVKHWGIrbv29+Osm5pNzwwQ3c0Jmw1OscnTay11tooa2+bsGUeZ8KWo4Q2GYPTKV//NroWpxl2DtgADqAklbSVlHd9S0pyK2jL2loZLOEUBogUkMQb0Rb1K6YTNqrfXFqJMFjwVqQCyqSBxBGRruUByHzZkLUESzLfhTLCeHLOhiIM6MLDwbe38D443tkiJ6JT21vgLnTQQQ/nmgouwCGNz43slVFKmSzVMNIKP2roZe2Kth24VfuXZzhhh7D9JqHNprBOLKq1969xfeGVlx09d+YWIeJ989hP2t7b7ai8l5a+YkMHr2kjh+PC/fAjbMJW29hpPzvLXnz1Ff2IRL0pd/aCefY67wgiUFp75CdAyWH/nbFYgLDVJiNtJN5y9cSCZ+qwPvOej9h7dztAcL6dh28VGbPRZvb9Uz5vX/7NT+yWGfcqL7Xf2M22lHPOjP132c0uuvm3wvGD25larlwDEyBDPJ2IC5PbZ02zp56fj3GuhhmQMFc6vgMynJp9PcvPeT7VeI7vZ9Kx7eTpPbfWXmqQWqyKpoZREcvKg3w4Kx198EOb4DYXrqS/8QZWYtXXUY445rMf8uKZq7qqeO/f7CPst4JzVKfOofw6hiiAoZxBo5jvecmZYhgCpxCvOrrtPJ9zJsvDedPgKB2PxZvjD5/o2Tof/+7Dbcrdf7ZvXfhL2X3M5pujvY/RGzikY8TecMQIzYlrrTUU89TCAMX8yVXYoyYeYiPgTP7899fbwr9jwYxOIOzAOXIM57PCPLTP+LFYrJtsn/juj2zG7Cdg2962Y2EeSpUcMmRIWFnHyiptO3yD9W1Hv8hIEWN8xhNP2aKXFgtn+t8et15wDmNTV03stN02Wu2mj8BAX4JtrvfAIboA2Bvz/xkfPdrWxCsC03DUxIPsxP84A6u/eOsIMrTqDKeUb63bEuUs+hn7Yt4+Cfb9+H+da9NZTtirav6nHL75rs/Al+3HWFjbMc7DLv/k973LvnL+xXY9LmzWHDrUdkYZeHFF2WkgnNtueg/gi/xRtm23wRG+BRY2eQlGvbkVkhdFGw7bAPlbA1IeHnr0MeFpLGefZJ2mqHTMeQeBK/G8i6A7Gmhz7CNo36+8shhyX4Mug3RHX3DSI78dK/Sdy5fZYrwDnR8sYiAPCAx3E/xDRrwLwf4ZnXshFg51cw30VPujvoyvQojdr45Dyw56HeVqBlBhVgqvdNg4uLVlTawqnXXCB1uSfNbxH7APfeuHtpgVhErgyhSDbvM04iBjo/J4O4ZbRRDYIfZ9+y5258xHsd0De6Xg9PvTu3rdIwcnDlIIp5x7kc2Y85RweAXHW0aseHdQt8KqO51xXqGzAzNM2GZL3R0g/pjh4c4AHXo1IuDpqTwOxmig7px//sL/tjnPzrdhaw2xvbbb0pZixYDOud+OI99PnHexzXziaZSfW33QADm407AsV2xPe/7bmXECaLeRG6xr3znhGDvq4H1tJl5byYucow7YGxcjW2glgN2GZPvuOI7s7e7HMCixsyBMf3KuferHvwjlho14q46Bg8W4rbZU/Od/vNN+cdvd0KHTBuHhw/fuubOdcNiBNnrkSJszG7xgw3ARIPTQYcRj1Rp/4FbjWexMxQknxWe8UX7DPNCmmnsnTGGZLA4ODCUdvU6GMwANybw8xHOBqmvYXhWe44kcT/tZLQNMna8aCZodyDv68FY8nHI4EOxC2uLiBZHC4ZCRJrAsmsnJILVIozxgNeRb46KY26EAziebyEuRv3be2fbynOcy0D/+8iQeZ1lp++Fi2PVae8tNbN2tNxPOsteW2TZ7BOc7I4qREXvvYLuN30nO+T8Xv2RHnXqCzZw507i1ZO+99rKTP3ycnT/1Wt2lOOj977CVy8Jk8s5DJ9lFZ59rj8yYaR//wr9lbDfaf4L1GzIwSxcjB+6wqz397DO2+cab2AE77maP/7NWDuKO3WR05px/9ltftl9e9mvV+mdP/ZR94eTT7EtHnmS3znrIVsZx0/mTF8OiF563A8a93S6489qQ5e03pDA3YhsCLiIYXlu8NEIxJr3jaDv9F99F2i0Ysrji5vi15pXHyZiERq9xpMgnh5MlQqTGl2nn7ecaDiF53JDnR/UzTzQ75+ySyMJ4nvUr9i/u24Vzrr7uNECXs+Jpl4U2LLxCOowd0Dz8a5XSUdIzF0LcIU/hHq8qXyUc+nD+43w9avPN5Zwv/OdL9p+XYHW1vcM2WGuQ7bX9NnY33rTGOSz002ALrnz6eMRVVc35UIRON509Bj4IuNeO4+WcL3ntNTsSjvo5XJVuC3N6cLgCv70+c6Z4cI7eYoO32beOO8aOOHg/mzFvPrmK3/QnOFddgjaKuZnbK15bitVVfMwGK6wso7bP4MLnwiuusot/f4M+gDMec/VPTj/ZTvnhBVi8ehK00BX040ZvIZ7cDsvV27pAuwCOGlMWyyJnF+czPhKc83Qu3xNz+ZLFL9sylJP1SSo6uZxHdSGEOMMen/4Kyk/foF3l/A78oqMO2d9mzH1OuMSZhnJ+Ej6Aykm/hX4A+iX9iiMP3l/O+TT4Kp+/4Fc2asT6NoK+xLhtbdrjcPJZT6gDBcqP83xIBzuSD/2fLLCsvJCA7fnoMwTDnu12wWVX2IXXXm+8UJkAO57/mVPsY9/7iU1/9K/WvvxV2Z94AR92zRiGCNsLfTG2hx3Hj7eLvvYlZYx/P3xB+RrBueZedurp25DZbTqx1ZlbaeWcQx9dpI0daxd99T/F44SvfMMemj4ddgYy2wN+/0rhX3KLCxulKp+NGQ2gDVdpvbF6fuK7DrPhQ9dsyX7E+7ej3m1n4oq9jc4pJwA0Tk4cWlEv4aLBEI1Bt2LgGKdfNP3SsUfZzHnfx9Ua3oOFBqjbMeAR9oOjo7CzIHhnUjOTLJQGLLkdhIGrBlfd85A6wN47bCfYlhuNsOHDh2PS+2d2xT6N+OgAtAVVYpy3DLlyfv190+zuRx9Xo+Kequm4daiGFR+U8QbOiwDSMYTBVdwEc2eGAyJ1ZnmewlPPd4HvkftgEgacK+R00Cdss409segFDeobvG2oDccqBnVYiteD+YAKpuLDiwl1DJSdMpAMq7JUgh092ulVODpXT71fDvo+GHxnz5lNDmDj2pMgBJ8YXOcMjkg9dkZUyou5zo9x51kGY74H5juuw/zstGX5astATPUsgzmvqrPLKLUPWoJs58RRmHSOkz6zfCIUWqpQpCO+dEMdCBe3AHn7vZPOOVfR8eqJTnxJpXKLS0ndRdbh5PlsIB5PEEpUSnJrdZUDNkqUyCiiUybLXCab++/7r1c/3qSwDlyfcuuPh7ZB/YMNE57kT2ds1EabCO3qKb+36X+ZiRWfvrYc+75vvuM2/Qauv7ZtsOf2Rh798GPoMySsrrX172v9El10wYQ6UX0Js1aG3UaNtfXXWsfO/e3VdsTkd9mB2+9qP7rjamE5/n477KL0r353pV1y5a8xHsECyDz7p+fa7uN2tsHrDrUDJ7zdbnjkz5F7sNNB2+9iTz0z1267Z6qdePSHbeyoMTbjGY5t9RaUXdimonnmPP2k7TFmB3vHbvvZtdPvzPh6hHcFGgXXvSargM92lYVCHuG5/Awxi6TUGTBG8nklvIsETEtePa76Mu9EYdsY+xX7F/sZPi+KorHvcawpMIy6awuMKwMcpllvKTrntxSS0mTjSIG9J6vyq+B6T3ssJ8cMjuUMl/zxdnsKcwbvOD8xb7ndPW2G4HQ0uUDEOUcBDrrGTZaBDhQcQwbNS1zpVLyvcbV59nMLsOA0F3d6x9p5V12LcSgsAmkOjvzCBQB598Kc9Q+7C4tInM+EE+dCGTczMARTf87V+NODn3TUeD+XZ8717ZjnuFqPoHkWZXJ7Z2M+y4SyyO7I5HZNBj2IGcukNOVibh2PlXzO5TfcPz03l0979FFrf+3VMFdSCvA1tnOe1sJakOzl5LzNck59dJYdte/ucGLD6rCEB4GKsv60rQRFJVv3Pb75m2ttGd4NzoW8GbhYmYJtOywjfQc9p0Z0ztvcDhKD6pBxwnNlAy705BtbaBd/QUdqR9pZgfaGXWVf2hk2DTrG/IDFpi05vADsRNly8iiLvh3LJh8P7YH8g4lACGrVH+outhVdSKU6c4cC+fICBjpH80Tpb94pa0cFkX0K6cpkFYNKgrIMNjb8iqEIE0a8YuJVV5/Ba9l+u+5qR2LFtSvhsB23x1tddrHb77lHDUC3xHhVh8qs1wKcoRsfHuETwLpijcKuuOtBO3Kvne209x1u37rsd4Gezi9JUNnUP2u02U0uNBo2QjQ+4QF/2uwnbTSccV4JbrDeujZinbXtyrsftCNQrh23HGM3Lp5uYzbeSPgz/kaHFc1Fgy1AOM+Z+6zyRm803IaBdtGLLwWHN3YItUx25OgEc/RmOdXoENHWEd1CJZtgAT3wiTJzNYDO9OgNh0sGy/TEgkW24B8v2qTdd7Gr7rpPFPtioGS46y9/DeVWCgfQUlpo4Dwi4BS6dZRFO3GQISYexhmzUXyOgPLZAZkDHBzIri4U24kjlOF6Hnk1C2V8y2Apn7L8ZpJK88v0I4yTBu3AuBMqXktzQPF8TdRUUDCQE434AimhPPECXPjMRnsgmm9tiSQhH5Xne9B1Gx5EXOlr59I6+erYnUPUu0AaW03Qs5BXlWykA8ufOhZuj5SXy/Rzmrf2jpunyRCHwA0OCX3AM9lvFCBvw3fv6uC683Nxz/iYUaNs+CHjrf/b1sS7sNvt9RcW2yuz59va40Zqy0PKf8B66wTWuOOUwgmsWus5aGzQ4aYH7rSBgwbYCUd8yHYcs409MO9vmU5rYT8rwz3T7re37TrGBo8cpvTivz5j7/r4hzQpb/zePbDa54XDFrjR420oFkp+dfXldue0e+WgHzR2N5v+/BM5O4sRyDrkXyESWXzpB9+yy8+92E476Ei79clpthirZ2noqNzikmLV4pqYc3Vc07WGlcby+WV1nmKrD+YArSVqetXjB5lcceYKOhxzbm/hRTB/7FZuLpaLcV/q5oU2V20BD30YuBwjAombWGl16MgIVBEjVkM0QTwJv1Ef8bxi3/EyaiSATkEtzBnPcqXabPyoze2ex2bbEjpMnJN4pi7EpWNFAgStkkfnWk6yz13cZxxX0AcPGWyTdtvJrrzrAa0QHwFHdE9cCNwz42G1OzltkZ8ce/LAfAbL1uYz8a0VXvM1aWhDzbFhvpYTC115Ds4dHXT+Qm/TM2h0KFkU1gnOKge2cXIxUYYQz5BBB5ovUQgXTcQMdxueeG6h6LaAP5Cby6En3zTT/gadYji6xIJzTCdZr1gUFbjEeT68xhjlBB8FzqX4hTjVQZw2hzq+ONmGhjUHFzs7YXvL3ttvZVfe8eeAR58GAtu4b48hOuWse+35DlCVW1HAqWstAI8MpAM1p1D8ZD/YEH6XfDASwJ5yruk488c6wC/oHmznfFlulpcXWdyL74HpDjjW2McivYMtUI+O4GfowKqWXlrErOlMHtpGTHtGvevoI59iHwhMwZb2kQAX2PVzvsQ1+pqmNdj/cAzmyZxzfL6VW1vW3cC+eNQ7u6XXF498J/Z/z7HFuDpsZ0XSEWWjwRVbfU2GqtGgxAYTjc6r8NG4BTRpp7F240OP2Exs5/BmIGdYlR/UO+1dh9iS1/YOV3KQxcD966zA6biddOKYLWzQwIE2YdRmyrt71pM2bovNbPwWm9pN0x7BKtswe2XZa9i+8hzaNq7p2ZDZcNGwlry6FFe499nkPd9u13zlM1hRWIiONh+r80/YjX9+IAx6yeD3qXceDF1eCxcKLDP0PPXsH+FUaw4/PP7IrJyD1+ivh2+vQIcNFzPtcsSP3G9PrZpzv914dOol0G/qI3DQyYYrPwijh61vP/zYh4KuHIwh7/o/3283YRUeCeEcigumHVBOBg6Ao4avL143/Pk+wYilixqlWj8E7ipeORHLztCFTlQ1MQVGLB47fSh7BouRPNRzK87UjXz8TDTXN4VF8mZ6Bdp6DQJdhNdn55Rze+p1WVhZDU46V9CxBx0OegffdBBDLeaQ5FywT5KTjzbBaygj4VSsj5DVKnXCqEmUK73kSjuJe3bRa3bU2w+uo5774kL789xH7aYHp9qCiR/GYsOeNmXMKHvg2Vn27MvP2/T5s+2xTYIjjp6TC6wDBcjwLSA5hEKiNybZQ7fe1ebOf8b++uoCG3DvHXLQD97u7XbfQrxeDIF6t+EjHQxvrN3XBrxtuJz9zdfBxfmwEfbPgeto3BnUsYYtWgMTYAyHgAcDy/HoS8/i4bsX7JCtdrZv3fnfgEY9hREOfC2nQqxf3hm45JrL7KPvPdpOO/Ao++rNP0+w6dAHHm5XH2NzSEx4/8hk1suu4dRRJ6NffV4eUsI3j5BLed+s2SJPHyweSDpYn9w+lq2gw1n3uqa9uLe8MiAvs0FASrHzUmtMavrVYI1iVfgOz85gwtXnXniF8NSHpttCPJQ5cZfx+k3Hyiy3Yt6N7ZIzMf9prMMcxdVXhnM+eTwpZTLOCcPWXktwOvV6kA+pvcaNFeym6X/Bqjy+aIw3duyN/eV3c5EIBQ93ikOpf3DCUYEex8FrYG/6iGF2Je7UUld/Xodz1Tm4CBUMcxUX0abc9iebcsutisuZ5hzGlXK8lYQrwlztZaBD2L4CWzhZR7yiihdQh+06wcaPGRnKx+rBHwPxtPqM56pCQA54v4rtcNdj9XwS6HJz+V8fxwsfpoaVYji0euiTTjZCuKgJ5TznxKODLMC9nFfcGeZR7xbcLnveJ46VPM2r8COum/pnuwnz8hW3/MmOxt3x099zmB13yL42B8/BTcP+9evveUALfxLoF050XJMxzncPQAEWNB+CerIt26j8F9qRW4lgRznUoOBZccC1es4LoEKbzhjThvwDveo6ZugihfWAPNQi5qdO600ezieJs43JAa/jEXj6hUwm818k8qZucVFjlUHLS6/EJUzfAABAAElEQVS6Rj5fbRg+SDTI2rB6ftaJfKViuOVbTlkNJd1ZJ33YTvnueWgIYf84O6S/1ie2p3oGdNDjVTM71DeunGK/PP14+88jJttHzvl56KCgYoNhvhprkQvKokEM8jpxVcqBimE8nPO9thmtgWYG9qPPfPpZmzh+Gzu3PwYUrGBff99DgSfp8FODw/uWeCX/A+y9W/r669rTPgZXzWOwmj7p7TvZ6E03touvvwXv/sTdAbdxReHCwBp61oToMLvqdM7PveYPGpA4YPKhEzrovCV21V33295jt8HAMk17zDWw4jqnFoq9FTngodUIRIfjzTD8edA+xZ9daoswoGv1BDYPujlG/qwB1cuWz6pOeWetxshkZnZrgJtmVelDK5SZvgqu+k0ZJ3G3R1E3WVplSyTFqGhK7OS8yrULQsMkEOqRq+p8BRx/K3nGyks7XgHWXnAeKLaybGRLXahriU5BamvHog1ao+oalsuoqltyS7e0MB3XuWzgGgPs3/fBxFkIn7j+XFsJZ3XFoN52/BmftvO+8m0bteFmttnQsGpN9BmLnrAzbvu5zVv89xw1t9kwcDWVPJqFQ8fsan3h3Ey54xbrt8V6dv+TT9gLL/7TDhmzs3156qUZOR8IZehcew2t1g3pP8iuPfabIf/YcLpw2vV2zv24Y4i6G4DVzEPH7GLzFjxrjyxbYGuMXNeun3qLHfeeY2yfrSbYbU/xQjwfVrrDHYpgA7YaYV/50Vl4M8bB9p7t9rJb5063O+c9khHRrrU2moFLIpFhSU6tL5XjhJZdRhjacHlOC9BiXwSJl4VtyuMZJ8CweIeHfdGf0Lf4FhfezWIgbmiHBW1LZIig6kB2zkK0eUTpVALPY+VTdeVAtsZ3zoH4cb469ezz7HS8tWsU5qcJo/AwKH6H7boj3uDzJzjL96KcXKGtrx9XlRK5vULbUhCfCCeWTvmT2IJJx/7hJ5/Bsxxb2XmDhtiry/HwH/lF4gkjNyF5Fuicn/f7m6RjmKezrFyE5fKyuTPLxTwUKDiZjDOgjNxOES4weGcgCE51D4jVR+635pbrH171eyy6vYqXNWyBebw2l4/CnP6zK662JbwQoB8Sx80wjwZJdfM2nPNzr70x1EG1aFidFwjteCvd3+3jeHj2+HdMlM+x45iRuMs20ibDl/j6r6+2GdyHzoskBtg8iyPpNccxyXUjGoNWuuET8c069Lc8QKoW32RTAqGDLz7Sr3EfwfH9TMccFRN0YDxerDBf26SQ1pzF9sey0V6xTYsn06wzNhCSsy9muxxIgbIBFvobUViortQmNVn14PKLnGINFMH16SoG9ZjVEHaAMj6E0SQ0jR4y4NdCubUFr1Q86tCDbMIWm1QzbSFnwsiNxefyKTfggYEV1pu3VCCRDxAwUK4CKxAR9QdWcqxoNiC+qonbUY7HG2KO3Av7N4XEEyY6zXWhUs/5/c02E04trw47sZesg52ZuODFFXSG0fiy1fjNN7YZTz2r1zbOfGqeHbH7BJuIFXqG6dgK0ws9WPveqAMHB17FoqEtxSr6OZf/Dg9nwEbYO7UFVgiOwB67o/bdA1flr9slN98ZGi74nHcddHn8SThV6Oh8UAKDCT8uxAYdi2Z7f/5bwO9tn3/fYcYtQU/MX6iOE96X2ml34cFYrphPGL25LXoZ++8R7sJqCHWS3eJtsDkL8ZGA8/8btNgT9sZyeBNhxSHbbgO6n996t1162z22HrbnXPW5k1XnvNXGSLA7jpldxV3y0gOhtHRpbrSz80jpGC9re81wmtGU6pEwrcyP5UxQQ7QAl/yESZpmPTLNwY+BaAEWbCQY85Ehtjw4LzgDAZ7ASMAgZPBAu/aPFHViq4MeEOUWF2Q4m0DQyjFQuD2rxoJGnJw2xekOn5S+Op4vYZrimzcYsnYYJ41lcBY+d+UP61i+0I6H0EDTbxQc5ivus53ed5Dt9vbdbOedd8ZDnJvabluNs/HDRtlXD/iIHXsDHqD0zglO/OKkAurL5SrNOnK8JD5xq7C95YZpU63PtmtZP3wD4g933mzHvftoO3jrXeympx4U+QqsdjL0xap2B+g7sP5x19yas7zXZmP1qsTwhppeduiWYfV8ytRbrf/o9azv+mvalPtul4M+cctd7ZYFD4tfesi2rGh8DG1pxeZ4feuP/st++qWz7N/2fL/9aVHtdY4uK+XRKO51z3MtpDVVgzaKeT2mXBrh1+VJfr1c10t9NKcjuxhWz7mCjnbBbS58D7rXdWjn7NvsrnHOJD0AlCJJSZ1Tn6J0pnPlibTEVQC/Yn8KvAMnt20NPXAr0hBKmKjoJGFeeP6f/7Qv/uwXuBOORgVHbdzmeJ3iOw+1T75nks1Z9Hc52EGK2Wk/+rnK5Tp95JD97LhD98OcBAzMS9z+MWGLzWw65shxmDNpg4V4u9meA8dgFX073M2ZmSv7Pl/4NlDaNJ9NxHw2Z8HCwJp2jJhzFv69NlfhDR/ty5boYUW9+AH8udLL949n5aKySf2pzOQqWLDLDVi0+sWNf8KYGRo75+q7z/tWwCksaASH0Wzp0qV27pV4yBqOMOfykVjx5lx+NB7g5OsAL7zscjnoLE+wO8sQwl6f+6YWB7/AeRt+w5z5nEehCxAcZzbKeRreDd7BORlvMenAj/Oy8oHLbbSfxB0ObiUaMmigfImffOoE++lpJ9nun/qi/AJJo3zu1YZtQpsOZdbNA8mMElF2fqtGehBOJ5yr51q15haSRDkwZpKBjrbmokzzANeRRQJi+styHR4Bcsjp21E2A868GGEfCv81PgGhxpvKSB1XyhGSs/RP0l4A1y3N6mo8alxH1rKDXkfZwwBVNre2YL9WL3wtlG9tGTNmSzjEe/eIJPLhVpBZjy3HwjgaDRqOngLnKnlsKBTEhkJHllfbWr0mDA4uG/clN92ule/jD9zTFrz4svSic0Q8bxNolYKTZdZZY+aruFp+HNtSjthzF31kaQY6Bx15OuQMxx2wh858ZVMnnn4Pt9rAG7r0wkQLjmDPH/ZzWT/hPomvZ9344MO6VaYrSTQw16WThUGQLjhqPyPIOXiIF44duMXEDnIJBhc66B/F4HjDXfeECwvSwjxTcStxElZAuPWGzvpd0x6W3mqYbjzwpb444RfkIhpivIpF4IUOn6h+/u9/txux9YW3QQ/F74bb72Bu+LnySJUFYjHwXJMiUO1AHiUdLZ0wa8iNYz5R+bkxdhdyvZxFPavgFaxVpkpDlBPJhtGAjcrFW+7hYUSs8q3sjW940InATwwa2D8VWyxfmtdCnG2skY4tsChFSQfbrvJvX8O95sDa2zv5/PfPLqmTN3TiWOu/2bqCr3Xodrb4jln25wfv08+R77/sJtt5kzG2xfob2ezFmGxjoOPGwIulotyIkp3WW2NN22fj7fXBoZM/+FHru+4Q5b3+ND7OgTBx9C52/YLpii+PF9ADBw/GHZHe9uLypTb5g+9T3qc/eJLt9bGx9sbLWGCIZZ24RXj+ZwReg3fe7v8uvBU7hAt25v3HA7+yZStfF9wPfqchDkNaJR64xxZ22eVTbPJdB+EdzAfap3Z9d0BHPVMWbdhjgbzY/hrw7EFpmdqtlCE46Ljl348/9Cn8fAU9Y1QWgcLUuarLe15VudTWy/hGWJnuZbCUBfM5R8HNkkOp+RCDhHf9h59+Rm/84t1eBc4TsU46sJgT+iL7eZzziIQCsIyH7hye95gwEq9RxC8NzLvpgZlAxV80SAdXnSGYczUd9I8evI/diBcasA2wD4UgCooAHQjlAKMO6Cjip8WpBFPbaIQN/Dh3ak4Gjh4qxVmr7lwEAy8q7+UDgRzkrL6gh+Zfio2V1MkP5gD+FBzqG3HBMfntO0IlIFAX/CiattG7xSUfciGrV3ubXXzDbXLQuU3lhopyquwqI/pY1C/oE+TSseUdCj6Ayy1JvOORhjEbb6iLCD2nRDtGHVRO+D5ZRZMIPlyvTiweEgd5HfgIIcugcZw1GstMu4SJxAGpxNbjsjN0oiy9qY7jGtMM1BXtQYuGkOdfQw+Z/zuOb+oWl0YmYQfTwwDctI/XKvLNLWd84L3d3tpSlMWtLuT34a8/Ze1wtnu9zvuLcBhRsaGxgoIVqx8aD6/EWOkM3CeF1zDxlWM/vGaK8SqTD3gyqAEQz3HRMOVYK1Mo4YD8Tqzec8vIlvvvJdid02fiyn2ZvYIf95NzAFuAlfqFixaFRoWLiFpn6GXD1l8PHw74qF1x2x328DysdLMToPGPih9tWvTPF+UEZ/Ipkx0BwQdBxnlrKTjpUJtX1TDAgoWv2vX3PoiHcXbGoAinGU662+NOOOR00CfBmb781jvDrSt0BHWDOAor7vajQQl3W3qHxpU8X6vEyeni6/8oB/24SQfZDX/6U6an6KhkdwLludwG9OzUwR4NkJKsbLBNYB5VuZHI2pBnxHOz/AJ602Qj3Vn8oiI13fMaCi784ADXEVITzg3YYuEPsXEKbk8c9KbKdgGhcX3kdW+FbWN+RQ5d41//tpFIj9Oah22XzUGE0sSdg/rqveWUOmDz9az3pkNtxaJXbMXzi6395WW2YsHLNvfZeXpnOd++Muu1sOpHfD6Uq4CT9iuHVHZ0GTxPHBWc6H5YjXvnjvtmOLYpolDkoI3H2RA45C+/8ar9Y2lYYNh5k61tyuy/Yq7sZX03W0c0Y8ftoPMjC56w9kG9bAT2pO8xYmvxeDc+apSFyJfpw0btYlc+jTEjCW4nTeyAd2LF2Ib0s0F7jbYvnX+2TdrrQDtl7CTxJVnAj+VN+KTRWntOoVVx5+XnKrzW4a3JL5eX0tJp0cVu39i/0M9qDmTr+jTEZOMrCdSjXMMS5C6AuAa554Txts+uu9glcByfX7Y8OEWQNxqfWmdY9EJhjoKDnqrpr+elk8+3tBw6YXstCv3Hxb8GNbTmP+aTj048AHd1R9oGaw62hS++mJ/PwHHBIuzxxlZRbv/ks083Yr83Ns9KB81LnJN8wOScQSeSf4jLaadSyNeDuek8Sjr6BpjDMNNrqyeZ8oHHMJdGy4o34Fzso5MYS+nbLjbAO8ZPP/LdduWf7sKd9GcgCgLhsY+Oc/kCfHSIc7fP/+ELn1yYC0GvhYSuCxa9alMwb0/mvO3ljA1JsuLcq2mR24aw0EdZ/Jgjy3DF7Xfjwjr4CIPwDNqwoWvbAvoRKA8XChnGw8500rlPnW8YOmr/PQTn6xi1N19Ov0Da4kK53ELMCx3ZlKUHjrbrRH9EfgntqgXHID9wyB9Z3mjRfEaaAoLkGZxz+DP8YBLbz+y5sCvv5sPvQk3EX0r4rxOvmq9aXkGvYtClIqLiyvjwrSm8zapOots9/e2Eww/FAx7rd4l9M2TyI98LLr8SD37gSXJ2Sv5iI6Zz5x2Iq72odbHkVX4Htqtw1X36I4/IST3qwH1iHhxcdkI0CIYf46GXYpiGF/1//NvfQ2fGavljf7Oj4aDLEV8wH6ih+U2f9bgcdD7QylXtsEUEW1JgM63EQ7d9dt7J9t1pvH5FGXpwczpuM+PKWgMIEH506keLaDYd/E/FfnwOPgydry1RlPVy0W9/Lwed+9Kuv/2OkA+8ux58CIPk0TaEr3icejf0Q6Pn4AEWvVlvCDuO2szu+v5XFU8PkhUfsFGZ8M5ZTg8LcVuRX2KbtOduNnH3Xe2G225TZ2Yd6BeZlLWXlH+QnkIQjzpl50I2k+SricpxK3CK4FJ5LfIr8sqlS/RQ2QlPhUa8kCfBOKAihIcyRaYpra8uuTyxAz7hziejI5LaBvoCnUOu4PL2O27D673oeEAUN3fyIeqUB3Y9JV0iWbO66Qr3lG9X6Kpw0w8TBZxaBfXZLjgiRVqODieMPMBOHnOwnTfrBvvjWg/b85sGJ/nAYWNxJ2k/VeN0PDi6cnCNHydEBtbVyri1RoCSw6SNdxKPwz7zYXum95Icxuf3+6B96LD32qTNd7ZL595p1z18p5180PvtA+MOtJkdC+zqZ++zIUdMsBO3OAD7ww/SA+kPzZ9l7duvbZNGBsf/p9dcaj/GnvQ0bN1nfbvqWxfYpE12st/MLzjoBX15sdeOX98dhts8bKf5ys++Z2ee/JmMXb1dsyxF5MTkOkM+v6VUHPdawi1FqtVNmu39J4XVx2u07egz7fAX+SYX72N6WwfgtV5c4MB+pv8gzfuuuh9ZA5zBAmLeWih72hdq2oA02iXNp3TCufXD81ONCAvyoDNwkLDJe+N5pZ2xmINxvRi4xfN5fGCITiedNwZuvUhtp3mXGXBqd9h0BL6oOxQLUlNtJj5mkwXMPQNxsUcH/VBs77jk+ptrczjnM1oQumk+g4N+3KEH2E333Ae5wUHnCnHZXHXyV79u02fwWQreXWd5+I/Bjk5lHPQ6ePdafgHLgNw4t+nuMBe7PKhSQE8nFPNlZlfOm/At9h63nT4MyI8DFoPm8gfwnBdtRNkM5ENZbjd8IVMXEsi6EF8ip4N+/GEH2Y0sp/b445XOKOc9P/yayNPDv597gR2G+uEXRE9852FpluIX4evgcmxRMV/7+a/ty8d9wC794qdzeK/gQ4qX33irFi9Z7ww7Yi/9fT89O4fHxIl41/j0x1h/9JNieWhPlQ1n2hk80vaYMalol8zXm5Dox9H550UCGxLs892f/0L81GZlL7QI2ET76IGfvjJScig7/jytc+GQ1aHDQeN9oC7PcVo8p30gJWnZQU+JVk8cRuJeJdza4YeBTjjsgNUihnwfenimPfgAXhsIeR28uEJQ44CV0ITQGXHl17YSn7xdaA/hZfpLXn4JV8fLtI8bT67YBVdeHV7fhAqi445asoXApXMdBtdQcWKKBsnPAXfCcW5f2cumPfwwPnmMzx7j6nQlnFTJBp877nsAV8/D7M778MQ5ZIVbM7xiRuOKDfmKP0zBa6yew9c9J9pgrISJFgd+7pcfVFjyIt47C/UzXcCXITQiRezxZ56Dg/0ari7nqjFTf29kC55dahde9VubsPVWNg6de8bfZoEIZYGdLr/xZhuDB1H5vvJw8cBOBRbQjR9VYvfyRqqOQTtCmcX46AIvYKaD14KFC4K9wJXhoiuvseG4EzEe74a//pabgR86LyhlOuK4bsU4000DjRFtUMQNOhah+XQqO58DvQBIBxTn14imyCOXLtHVeRLPbes0zKMOPJQV0WmLdCIRoXOK5wjLshjBanlvvN6vrT9vW2L7Adp+BwZWPi3fMJQp1JCgLJMtqhuhR2Q3lusrw8QKOmJyQBiED5LcddA3FC8evvzXK+yADcfauv2H2Jk7HKnfS1jJHtC7n62BbX0M5111iS1a/IL1WydshyHMt6lxFdrfckJ4MYwZPNzGvW1ze+7vC/FBtQeK2fa73n+0D02Eg74RHtZbMNXu//ssu2jK5ViwOMrOnvBh+8a4Y/Swa584uX/hp9+x54eswIeU4HSN2FHt7Nq7b7anH/lbjTfa4NP2V3tpyWLbY4Ot8KGTde255S9m+dlbXIJ5tMWFby9h6H/AaPvuxT+zd+57CB6SC9+DKJavvpV1o0WwX+VC13gUqXOsqhJ1MusR9co8bgeI/Uv9jM/zQKD6Ls5BUx4TLcS7AKtnn4Pk+eWygqw8KEv5GOLnLCOJhDzMUZjnuEj1he+fY5P2388m7rVHGLPYH6E+3+xy7lW/sw5+mAbz65y58zTPyhF0pw18OUdw5faVl1/UvMAFpStvvEn7xDm30vnmPDH1vvtsKpzvYWsPwZcisXUU/OQk87kv2Ijj3sLnXrWLrvm9jcf3Q8ZutpE9jAsE8kvHRK1SszzQaekSzMfgrQUN2pk/wDvx6Xp+PIhfvFyKr1ZqEQz8mf0K4NPgI8xfsEBfrMxMAwd/Ghbj5jzzrPSDO695f868Z7XAdfkNf5RfcNQhB9rgQYMyMs7lF11zLb638pJWsbmHm0FbXCGTq8PUsR1b0iifZVnwHOft39kEfK1zh0031DvNp/E1zcjzoHpiEkQLnn/ePvTFM+3oQ/B8H74IzkBU4vB7LRf+9jrZkrhTcHf78afx9jl8kXXIQOrZCd9ltl120814Hm6Z0myphDG4zMyuaBOyKxc8oe8S2O/Bvzymc/baRcipaSo21YcUEXcK9WpLOeEgQTuSE87C4CdUOOQwXtjnz2/qYHeG3hDkEuLY5Ml/tXOvrbbdFmZrIcCIqxq+d9559pWzzqpjswIf6+DeKL65he89H7HZSPvDD+vx6gi7CXjHp79g85/Gw5McLLBaTQeYlckSsoKzqy1ddXFfZHAc9cAjK55X13qfJvOCXfQgBxxZ3QUAN8HRcPQxBV+NZ7uREERAp4GAMlkOwNm46fBqLxVoRMvBC/LaqBcf1OiHHyd0xqkH8YHjt4zEDfDQUHllGXXJ4fHqn1fkuELnGX9szr6HnbqFiwIqR6VZXspCmvj4MWRlRsOnblppYWHowEEe8bRaQtlMUx7OmetF3gjix3LyNiHKnclWbjh4OXwASLJkP6rmIXD1FM5RTgKpi5bxJVIV3BnUyfKMeG5GX0CvJVlvNLjsH/RQGengRKFqP0hThsd1Rr7ucqrcoCINVsO11UB5OPDMPeY4cysLcfSaN57RSBkfjy1N640eYfNe+4ctWP6SvbTiVXu1/XV7g28hYJ32RJCOPcEoz4PFor147lJooM9z+52nByc3m5pfTeoNo8/b/9wgpkLg4Q9+1+7FSuDRQ3a0D7/7KNt5RJgYSbTw1RftB788337820ttrdP21oeKXOfDVoy0nx38abtq2q326Vd+7+C68+dGTrbTNj3EzvvtL+2br9xsbesMzOG8NvVJm/Olq23dtdexve/7uj3++OO29FcP2Sff9xE75ejjbJO1wt3Khxc+YV8+5zt26yP32lon7247jBhtN+787/bMovk27gfHWv/dN8/xbV+0xL694bvt+MlH2refvM5+PPdme27/H9kK9OXNYSfWwU/WeZ+9c9y+dswfz7I7+z6b0S+/d67t/NI6dtN3L8UHm163Le6uraZnSGURn4tYVx4vw1tFmPpbN3j4nFBFSue8L7YbDOrd39bpO8iGrzHUNhu4nr2Ad+FP41YMvJKPDyly1bYX2lYvrjbiv43jKs6aQxD3s2DEia2d9IzzOaYMhxCC9cOBZ43TjCDgxKareYDjP2xbVY4UHqnDawExR/E91fqyJ+ZH7UemHqwjjhkc4zl38AyYxhC0Ew/CwxZXznXay+19ifMG5gXmEySZWszD/Atb6q43ocDj/OHzWRg7kY8LIZWOcxifcWO7ibzJU44iFtC4BZULadnHimhjzelcfcXcznmQZZEGkQHlc8ykLYNmOIegb6TEC17JIz3LzkA49aBO9CVob9JDf9490Esm0CdYJgbd7ecFHX0S/MlPAA3/FAh3HTX/w0dgPsd+BOnHOZj2l+0BBJ4+AEQ9GDRfB1vrwoRllc0gl/4H9KeOustBvfSgeSwD7RrrRCqhnHpBhvaAo0zkTRPFoDfZ8OIj+gVlcz5R9ZpJ+Bd9Bg7BuLimviR6/mdPFZfd8CBrB7/+ii3CuqtPGawPLw+wQpuBYOjfG8829sKbtvjhxZ+c+hHx+Nj3fmzTcNekfcnL+EAUHubn3Q7l5A/kOSi5kGJuJ15h/c0zzrBTPvGJnMw8ZYupROeUgi23pZAWuiWCJkgpP8bZPMNV+EpbhKvoD371LDtm4kG2F17rN2QArnpWMfAhiLvw7u7f3HgLVphxtYvGRXmSC95BBxidf3Q+MKDothZvaXnLohHxyxoBOoUaADsBGy8bMzthNLbo2CHYmNkQ2TG8HOIZUjyGxo+IOhFxObiyMyOXnZpPa+IWVydfPNMHeRqIAEYyP+jBjtBDX/PiOWtu5IMfeUInrYKyjOBN+R5UBiYokyGWhR1VtcQBJAY59LxtSF0x0PpWHCgPGLlCujqyl4N2SGzgvAHTvjXi05SZzi4pnL2O8tCYlwKdbwJL21sCzqKN8mXjDLM+0oi2HrsAKdGVGBnPYBARUQ9atZanhPL8oDzZMOB6/akdkBhtVXzAl+fAK9QJJ3Dxj8z6YHVvYP/+NgCv+FijF75u2WelvYHJvxO3ndpR5+LpgnvgTH26FCps1yUeLSJTtyETt6HBbJ0zDs5RcfJTHqBta5WPVQMP3dpWPvVPu2Te5XbJdZfrVbLrbrC+vfjSi7ZiOSZihAF7bG5916mtphF23RP322WQ23+7ETbo3dsTVBrOnnmNnfGxT1uvIf1t6On71uF0jh1hmx+1p/XZZKiteewutgbeKLNyl03sR7/7pX5rrrkm3hyBVbnY7wdP3tb6rDvYHntjoa197K628vklNuTDu+DB03DnzgUwfdrZ38TbOM60oZ/aR+UfDH05Bg394kFC++ilZ9ob/3GKDT56gt5k47SD9h1l9150rw2GbXr16W1D/+NAz6o8s32ulsDxiu1J41brElwftg+PN6LmfNMbc0S/tr7WHw56f7xBYyBW9djPeveFEwRi/qhL+IvcqJtnuq4azwHm+BnRqEQWFw/yCplyZAHz+SwbRzLayIeyEOryHS85C5MFR7vBph2Ih8PNOYbPkmFLJ6GUGxZhopNOJfmvuQgY0eacTzjn0QH0EtFebJNyCsnHZcMZ5FYOyidMP/LTXAs8LwPnaMybtGWYn9DXeKeClLQF2zvpeKFABw9/0ocMxZxp5gOANq32QX3J389AVYjlUFy8g8MYc2VPZys/gQ4t+dB3iEha1KLjGrezyEbI49jci3up2zB3I+11KD1Ii3Ia7tCTl+b/XvlyUldZjxdysVyMhDtaAqD8EEIb0P4sC3+c9/HTthnpSRzUB3QUP9qLMntj/seZX2GnTm5XXvxkcdZNDMHG0EU289r23NqZ9qF2qiPKqmWFi0GkWQa+klN6AyFtt24nfZAIfa0NX3ttw1jjgV5NaLuBdybPEeKZclPZAkfdRMN6XIUAq5aGlh30UuqeBKo9oLOiEXb0Xo4Vnr/Z13B7qA1vc5m85+54F+p4vZqwqyJn4B3jN94/w+6YNt1ewfuA27F3Sw9z8GqZHS9ahhWpimUjhTOsimVDo+GZhx9RlWbFxB+BYhEbMjsIA/NFwcaMny4+WIdqkJFGmPmDqpmDRmRMHiLzxs08OurskJKMXF4EkK/oEOVAQv04OAFLurAMpGCZiSc9wL2oT/wsospEGvBRAFww0DqNOi5k82KhozcGFdqA5Y68+Y7YYGOWItgwMKs/koa46jD12TmIypSDFBKU73oXsqqSlO9lTePEV7lxjpaoY1HEr0NoBKjQlTwzgWmBAWcVKo9lTPMoh/VDJ7yq/BE/tGcvkZ/BlvwjXz5sOBirDoM78Wt73ZbjwpDXZ22dfTBfcTKr0TUqYlfzyJVqMqweCWQcOVfYX8ILB7Z3XuD0KywY0EHXK9qIv4RX0PWh/zpDbPDH9rbXHpxnr01/1lY++5L9A28zYug7dJAN3HMLG7j7yDrCDjy4Rd6cVIpyU+Sljz8tvAE7bFyK12/7jW3ZH/Aw6HOLrffSldZ7vcG2zvt2tGXD1rZl98+1pS/x4W2UbeN1bNCBW1n/MWFFfcX8l63jhVd14TB4q+GpyCw+aOxG9tpDz9jK2S/Y4L1GBVvACeoP3Rlew8ofy9AXd/8c5sRrT97eXrr4XjlN/Yt2daTVfWYb6GboKiVH0T5YPe8PB31QnwE2pM8gPDeL/oUvu/aDg86Gz37F+YJBY4v3AuipVXDA/f3bQiocpFOxTKmiiOf6VZKXRHNcfYzTuJTLwZBDjTWvUHeOT5iPMFCovwBXq7eEcWyiYC8botm8Gnl2cp6BE+rl5HTE+VN3X8Hbg+T1gpMY+7H0YpmL5eaARccSeMKhU4w/pn2ukg7QT3OVHHys/mqQpX4sHeVCEZahGCBP822ZbM6HCb6es0M6lCLI55tj6OAGKLCpL8pLqZInf4RRXeoALTrzsZyBF7SDLaij7MGygS/LzeBzQagbUMSyEV93V4WFA+2sumEdhvYXaIkXbEhUblEK9RakSyZWyrkaH8oTbU0dvd5pRaRJx8Bj8EUUE6zyABrSaruP7hQFzHNPOVZFQGbQvYJBqINgE7a/IQPCV5SJHi5GUG7y4O9fLPTaervtWtOqB5T/7rnnZltcvNHQHtriQv6oYN6O4hYOvhe0F692+L5v3ZoYaCM2GGaH7b4zXgc4Fh+8WbPSlAtfesVuwFc5b8DTzQv4RhQ8vKG9b7hlpLhuu8DJ5ZUqGlCowLQhO2vPYdrNVIPp1pbbRR2+1iE1ACAvUOHoeM7GRRTOGjQiVU1SkI4mFhokZGXqkJ6I4J/hez7PDEpHwdQj4iuPYMcToP6Q1pWXiFiZPohTupyURJY6ZKpoVCHll0ojb6pWlZ/iMp6Vt5jh6YpytcK/EU6V3EY0rlLluURX2Rpw8Y1CNcERl2k4izJpjAfjoS4A93zVLWY7h/mZW140+XEM54oSSLgthvnc3sJXcu5zyL62LfY1PvfGSzZ/xUv2wsql9kr7a/YaVtBxGa2/tHory/ZmZqR29D7nMLV9Gmv1BpcQm7uqoiiRt247X8X2ugHcslYbN1I8dc0UEOMO9zPBLqsEvSVQx/IV+PYEbov3ZHD79yTPN5nXqto1G/ehN5shLrXkoA+Ag75W7wG2bp/BtlHfobZRv6H2KPYy347XA9J/0nu46ZTRT6KThv82bn2hQn4GXI46YMJDlpp4xA9OPIR6mm2O9KTDSY2GAMIYENeYHlK5oxyYHCQkUjjZUL8wRgXnsFZ+ZgRBRRlyRkmb9ZSARwmBP7TFfyor4KI8REpDHQCZKmxAoimycZoVEnXKnFbki6vDQeYsKTOTWFKWLE8io1CKCKJrRwKYLfk1sGKEk7f+Qz2x3M6D26NSO+SonWdkxCSD+yKMc9wJgeeAIZERKsE0UiYRuUSIYyhlBypgCC+yUT4sFPGcnS/QKe2ik4Tzcnw/O6q05NYp+oIDBtnOE3ay8/+zxa1wzqzB+WN4eceD06bh2biwcEuHvUwnwuq2uCxfbt/84hftlFNPrSt3A5HlWQW7OVLLK+hFwzuDrp5TPn6Fzdsi4coKZuCVLJTtWIFVKcT5kR3tE8c+o+fwUOVFC56zi6+70cbj4YbJeB3gxJ1qt31vnPYXuxPbWKbOeERPIXOlnLTcV6avWnFvl65QeTUPx5xG4S2ZGLxRpDp6XtU5jwsO0dByncCeFatjRQU4X/JR48c50HhOONfBioBMbqTL5VMvh8dIqk8az4vNUl5OZ5NlOFud0XmzAcBNkVCk0RKZWcmZRz4lOKlc1lfCMs0K8Qo+omvCu5Fs0jO4TUIqDGlFmOdRz6b6ZsheKpcEWoDYX1xtOdrAVxGVxwPw4GCrLXGmRJoIWuGg05447oEf8glD0KRK/nFe5YoJV9DX7TfEVvDVXHj7Rr92rKjDQV/eia0u+MnJzAZysen+QQWhzkGf7jNqTrn6JTTXQRj53SwtEq0mtPyW9S4L8bZda7FdZtGcIBlbmiP/62FwfGPf7IfHcTMHvfdgW7/PmnDUh1h/LEaF7ZPsBrBkvEvKMVVttg0wOu884z+bY7TYSZjjoR9r/IQN6IyrjwM7bm9QF2M+/jXOihejBNT3DsGr+qVogq2d0s9hDA954lvgQWkM2bgfkoJ4ND+fZJyV7UV0XJ3zKLksyovDXYTHgjOVDXyIJ2VSFg8xiH0hP5fniVbPZfpGO2VZkMe4xnXFs5yWpHg7ITLfmMdQLEKNI2JYoGkWNM/parGI6bUa4AGvOT/n4j6QKyhKrt6zscJ3W7Bwvl147RToGPbYO53OxUJ5Jsus/6BHaOfgiAVaPtyrHQnkz/kvvqLSSbMzeURf0e9uaa4CnGVUOTPkrkfyVqvRt+yg10hWLeYVFoxU5AWjQVO+zrATt2za6URjD1Ov3lhp6oPXMS3n+4Sxoo4HUaY9+LJNnznDvnYx9zxx6Q+jFJ17OuH8wbHnwxZ0zHl7THuheLsquT0TqquoQ9fTLFN5eVrntSr0Xo6qSm5dizcPk+WtbNRVHe3NUy+rz0odoy7Fcng9Fum8bnj2+qosjjpBPZbzJh1XL/wCl5NYIAFNUQAyyIlvAwk0oa0KxqdDXRboAh/khEx7Gm9GeOeEvbXC2xd3tga197clndjqghX0N7DfNOxD95JVluatjLcs8JYFZAG+ibuX9e/VR1tc1sRzHUPbBtp6vYfgN9iefOpp9EEgsk/G/qj+nKVjHnmp26GjIk9jEHHSUEh6VnB42cHzIR1bPKcMluYVxzjP07moTy6zxQR50DEq4dVItyL3ClMU0VZbOg6n3eZPO3elvI0EpXxWle+q0jfS0/PUxujbwQ/k9pn585+zCy67Ql8/1UOpbB8IaiIl7USZEUe80HFog+ATwjfkK7TpK/IZBMppIWhLUwt4PYHS8oeKSi+WuqUBOxx9APzxaW0Yi68QSq+Una32QYURC7aDk41XH+phRDgLK/lUMZ8cRqV5Jw571eDQ40pLDzH4armc9yBDV5CxwlxO3blZfoGAFa9OyLJ0kbbAapXoQ1Mtcmwt3YrereBQWqt4zXBX0ZRZwUPtZMlapAUBzcpCFlU41eyb11TgGacWMMIQHVbCSco0+gVdb62OCRbhcZWcsrUqzjyuipPGz4iHFXh2RO4tVHbg57MZ4E/MelLOxLC+a+lVgGt3DrIlHcsNLwy1FdiDzseVqMVb4S0LvGWB5hZgL8ZLSw3vk8BD171tSNsaNgRO+tpw0nvDN5jztyfRTeHCY78Ku60O3LvClXRckLOfcrrTKnqckLWazp5LAnZFXrjjpG1rfJsLVtuJyimwjSuAihMxoVGSB4oUdZiXQ1Tw4sHna8lNMrsyHjRgL45V/pZ8hkRmo2hXcMlH+E0UI05XQxOWOXZBh0CRxaPMor1zhK0kCrp3lZ/Xu4vqKr3TVZ3jrIbWWWuPatGYj/Q2I2yuVA4XXSmc26JbNC7pVHz4kozwRSH8iJH4anKEpIq7B+wXeosfFY/78ym7HXyUF/tNVbmawivK0PoKegWDpoIdASOLHrFwPhgsVAlKw3QOd3zk50HAxm11DkDtK+ioY6Sig8/a4Y+Wl9H5hpJYAXAixIMoenLbmVefq5ytaopajmQhuSo8yM351Di/ObGW9G6lN7SCE4vETkO52UCUFJV5DC3pFVDLjxX8HbkV/s3qpKoMLqPyXGErlj0rvy5CQ7sITjcbdEgTS9tagJM55FRW93LBQQ47hhA69JTFNAch4WDQ0xn4POMX9p8H2XQWbpr9oB2z7X42qLOfvdrxhr2GARLvcMFDouFBJt8/Cuq3wlsWeMsCDSyA3gb3HE46nAFtczE8KNrWzwYi9ZtZt8sB4EOJeqMXHWs41XqAEFMdu6f6Ors0+jydAs6FDFqk4vxH55zzHMHMYz9nnE6EGDDNOIEIkZ447niRL3OFLqT6Q5mDWgarp2wd0pAfy9pq6AoueLodythnc1QXeZbxahXm9eDnVunK8KR/WUYXYA3rpQt8qlCzckYbs6a9PXLGaaMPuIJXm3DU0ajVXkPjrmKZh4Mv/1jPWgDWPMY+BzR8/CoXcBGQBea7cuxjdNKZpp5Mk4E77hnRqkegkkttzIyF6nbQZX+kjvt4lHJ4CnMhnudpnIM9uBKOQQSjF1fV5RixomhwGotIGHj4J8dLxWutjBTlpWzFaSN+aehKgyljsKr0ZTxbgbUotzu2aVYD5NmQb4u6lRVTdQp6nstkVMFTXs1wJIMEFXo2K38ZHWmyfif90abVLwCVA055oclrsAJMTrrrwYmY+pAR6BhlPrjEdh7x2W9A6+/MdRriXfPb623MsE1sr3W3wmrfyuCcY6CkY/6Wc05DvxX+r1kg6+vdKLgcdPQrPPYG9xxvc8F2l6kv/M2uumaKnHc55Oqy0Wlgv9RKeJjjKJLfKaCTraGGK390zPEHdojH8UBxwKmsfjjQIScRxw5GuZeddESBc0EehDQNHC+KoQxWxGklHfmUjdMkz5zkJrxcw1C6Jsgxu5Hz6XnOtzWO3cTqKVsm4oNv1BVr1Ii97IKo0dXyejzGskNGeqGUah10wep5dIZDfaQYzTQKFDpSFv5ZJPkfsS84h4AZU9Qp+qSSzTh+WvRyAsK66aRX+eF9sgndhVScNQBU5DUEh9IHFBaS6VhQL3C26T5hFF49lAAaRL0ys07NAWgVQ8ZrVfiwrKsQekSHLspvRWYrOEWxrdI0slijvExeV2xewG1Fx+7idF/3ZJgAE/UZnlHgrO9yEsdIIyedZWImT/gJh2kETeMxP+SFXp1tdxEhMUnAwSsQfvun59vTR77Ljh61p72t96DMOc8uHkjyVnjLAm9ZoKkF2OM4GfO3tH25/XL27XbZFdfCZ8bkDoch9Lg4T4Kb5jb2bzrXQNHHi7wPM02aeCEefBvgIV+OOR1wOu/E5wOixKcE0iCL59DXA5y6VYXUSSO7YvA5uAhXWnJKc+qA2ZhWlwN1ASsRXYIJUBOZXh4fz5kuK1fGvAm/DK8nIqtBVsP6aaKz26oJ2ipns34bhZbrvhGTtAU1Y8hvz8TAdhI+eAWAr6yzwRDO3R5eZ1xs7oaTXlX21re4uKbdPUenPOec6yl1+utYi/MCOv+yVXXPW81n77SrKqYn+DRrQ6uqY5GeOntdtKQ/G2kLQYNrC7iN8JTXgqwMpYm8svI1K01KEwb1JhRRh7QDNqSo0xmUEeZOuMYYwBxVkxr6F/lmDjkvUomDSVqyiYx/5quOOenHiV2ESMu+jkcg6aMxr7j6OrvcrrNtx20FPOCG7MgbSBFR8l0P0joD8kXwfCX8wCz9HNkzqi4BiniOH/kkye5GZaNkTErrnTy71Ee6q8Rqpqtqv2nZPL6aVWmZvevcil6h9aY9rybG6dmSHEOtyhOOWkwTHmHqPklaJMxjuxFObKdM++o1ovKTAXts5izh8o4w8b3Nseuq75EOce+F6kJxP7r8efBUr+dqOXB78b2piPs70tlPuQddunA+JT9y45lRBH9VHi/8XU7IqR0DVS3tMbehpyvPkluZm2VElbJ0GmlVVoYXx5uURxrPHKoILPZvgjNeiJflR9IePVXZelWEpOXoKh/ServsKm2X8d9MWS0ox27oQXF2OgTs/NRDprkVdPq33XDMnX/VueWHREPnrmLTBB6dc1zDK2gVMDrnKjgGD91iSztVpKnirM/aVmX2ALwnOmRawd1VKdUj7WgpvLu8q+gyvdP6qEDuih5dwq2QR3CmXwMcZbWgPyfCNKSTRJm+aT7pNKAWeKT8PF7klZfqWGVnSIj8g1NMyqAFeWr/eWQW8pFNOGBhywqcXDnrgY2olRfxsE9VrjkddHocOgMW4/QmKN5X2R979AkAkCajMF5h3zoiMd7BM2nJlXKVdo1JAxjpWQYy1i/ESZW55IKLDQ4hZHlKgrbFIDtFJ6FYDy2yeAutBQuk41ML6KsPpalDWGtJaqquCRugGqciarSxWSPORgs4nYjQgIPTTRLBceb2EpHioDgwmcc4HXQE7itX90VSn20nmDxDNjgjos5LBMCdJ7sKaQlj0yc+L755Dqjg53Cc4Sy4nplDTlwPjBPHH4oTo4o+pTwnjGfqXADVJcvo6pBCURrxoqqN8nMsm8jsShstOvE5OT2ccL1aLmcPy69kF+35ZuhFGbTDmyErfPiqstT1Gex07oSjo8lJj1jyRemce349dVNI1bzU8gr6qhrNHWpdqUfnXAWC6tziIjgc9SpF60rYxIGvw+8GoGVdKnivKj3ZkkdZ5+0J3hVq58AN610zRQ69pUSrulfhNdSpqEGLOlbybIG+Ss9UlVZwUvxanBNy1I6nNM4kZuew/5wrYNHxgBNMNKU4mIg8TnOMRyeZIyEnce2jA5LwCIMToM82B8LMXyACycUJcbVLyiJMzkOIwzMHE2IhcFVPOEgDzNc94gBWwZsglmDizcEZ+ZIrKcgUFx0UVV4N1lIMhFGzHL+MNuXJCSlNZ0hdj8guFWSexzMDy+YwplN4WZowBsdjXPaJMI8T3iPB7cIzg9vI0wTltBHWKh26VIZEj7xVCioIr6ZpLQY856Evdrl0WBhw2llN2vOYTRvIgSYO5cR93Gjz7Iu1lfGAKyddNCACPje6hL4AfPEjS0Yoj30opOUokg550pdZcvgJEzq+GUIZoAScIL35heUBXdFBd1nq9xIX8QKldCILD9n4AwDRo0jPLj+7LctzM6jzI0B6xxyf84rwmJ075XBppwahVaeber1Zgfo31ro1TcSnrPwt1kVRSiW/ImIPplutn1UV2VL9xl0c/mpu1ZE74Zy/kM9NMITTv82cfsfpgpJV+rTsoHdBVh61rMEQA4Xw90nyE7h8BRQbRNYomjngET8dPPKC/+dTMnpV+VtQj2XTl78KPAivqtAW2HYNpSA7JZYeHFyoTxwEGO+p0Mh+zGtZUgs6iV8FnpevUdma6RMmQ2BVyKiyGZ1s8c76A51nlNwLH8/sS/xqGy90RUEnnAEnrXYzqR/qCmey8FVx9UXPB1oRn2wyPkrEg+shhgFGR6GDsgHjip+++yDnATA/ExU4cswZxU9TFHXwOHEZor2kE5Rw5yJk9tCRBs4CdUdCBooZUQehsJ2n6YyuPBKLVJqZ5nncz07QStrVT3HTuPNqeC4rVwqjEAmKnF2oGlVDzpWZzsJ19TQJHFZNnGK3RBFZ5fUnF7Up5jpL1G8mn+3Y4d7O1TaBQSeZ//gJv5NzWGAk55xR5hAGJuy3gRdbfADrtb/KD5BsnBDHOLa6Q86+HR1w9SsIEz/wVZ+nPupXgXlwdtjPmA64MRrSlCHFKZshJHwsD7D8UXN0HlSfosAmfYR6NAxSuiGGMpvyKbBoVDaiNssvsOuRZI/JhM1K7dGkLoqFKOVRROrhNG3g82wPsy5ll2v2pRhoC1wVR5Dzjbj7q6LlorIWmQrEnKcjXSGnW8nii2UqmfREpdER17skOdDgp/eyQmIbC4R0dvXEBhUdcFeozjkiL2Z2sfE5v5bOPcC7Tu+WBNeQyujLYDWKno01a8iui59bqo8u2pW8vQN76VwvPzt8lc8luqntE16SR3lZ36jIz3RCfmanDNgsknEPiOwnkhPgclyjXB8wdE5whB+9DFKFNM7sQfjXfBrVkA8SkCIkWhgwOdK1ZHAOHFcTKh0F9mfwjHjcF6tpg7fS6VzgpIGOcdFKoWBE0giBoiODeA7qk6AQ/EKkAF7lpEQFHSi7JpkFqHF3LWuQNz/WXR1YDKdFbeTKFUqRwhyz58qXjfeRZVFCMU0011n6VqmitliSmdSb58ZZJCQ9H2fBycfjxKADLKXQBxkP/7oQVYbjs/ETVT8c3LZpmtCIQ9ZiG/tQlg5aMKluoU4VjRJOPLIfxXEl7IERvhQIXMMx9iu9kIHxrJ+RBXVkCONsEBYgOjJf+JCF8aeGn+CkUeJ2I6RjfMtOK3TjeNYqvsa+rLwlSnZT9xJOrYMa6dMiF5W/p3SP+nTFri2qWYmmFgP9/dy0jVVyai2jE/5ls5C2YtrC/VW67Z6ncYi8VtEp59xaFlpeQVfDLuPQDEaj48NCdLjbWPHLlyuuju5GwsvitXLgafDUQJI23J5qfM30TfJ92CLIKyTJbi26GvR2vbqsUzd0kawu0jVrK5n+LfJ1/DKDN8orwyesmX6iK9OtDJYIoS7NeAsnoWkWZR1n6yKUj3+txMXKpzzlu6PKfDIlaoRJbcWRo5GAmcAjDP/ZD3nil8CyPaqOS3rlB1rtW2eUeugc83FyGZKPD7UBSTtewm38UI7gpQd6as4Bj+wzGR5Pz4zHQFy/GFDBRey5PXduxJYaZ3VUEBlLU4A2TyaWAHK1dNV1AcNhzaSkXNN4M7qeyG/VocrL0nQoUKpvOk3k8WupcIFXS9dibq3IkczwzxSjgroAR0WDo/7uYAfegY6NURceziM68sIhPX+Y4YmTwfgaReXhwDwqJ5yoA3jIXoDxmc8MF3G1vSiDZCEv8Geu6FIaIUFCJp+ZkY9i9QeVlf3b7VCPIkireBXk4h+0qcJI4IkurdC0gkPuzcqYaFAfTXSqz6yGtKpbNQfkUDYH2m7qkOMdefSIXjnG9YnU3ppDekL/ejFNIOUl9RV0vrVFfZoXpwi9mKZDji/es69Sb/q40p9veGE98NcDoWUHvQdkWW8a//XXMcqgoHTGo0Pe+QY+tQqY30KQrMRZZ7powuyVNz2hWCs8umlw6t0zVVWvZNEm9RglkG6WwzmxETYLKnOLeOTVCk/itcqXuA1DC7o1LyUklPBpRUevt9ZlRArJC06KnHQ5zZqisf+N+gSdiCaK6FQT7M4436ksh5ZIxOMJeHIIefa0ziAkX8B5N095oAs4gDNQhs6QKP2CLDnhSPdaSXlkFuDagKMk8giLNPJW4LEApJDZCPmMOxozMxphinWMhZPzyAFXc2KVZcoYXupYprTQFfqXyS2DVZCvVnCtNPViqnT0CdvHBE/Xc4gQzClVvCppihmuaHIWT+ftcNIx7j9EuJLOHuiw7K5A4pgHBx50dLoJZ0Bc21WQlKxCnmjgBGirjPOKdHLCIh23iWU8o15BB/QbOhFRnKRw/hVOBPqJ8EZWRH5EpQbVoVW8IgfJb6hBkaI1fSJV0zbURbx6ZVqyTh0ZAd2nDOxaLVup8BJgT/MrEZEHxbrnAP9mys72iyfahJmmBnAcOuPqS9FB12sW2bfehNDyW1y63ZA4yfgPBVrzqE/XihUnIFZM3aTbTKA7BqzgyKfG+F83psH4X1e9ntNsNdUJ7edN43+NLVfRFnXTo2Zv9qskB0mlMlnJZ4SIx/6ivhJpIg9fARc1DUo04osfmwP4CB6s7vhKCZc47IOkQzTeZu8Qf6ZDfujfwJMOokAeuQgB5yCT2AoOjrUtuZ6XO2eIOej/X4n/C2VsrcbU7lpDLcEqp87tFycV2ygCHW9vxgLwQIeYbVKNPUADDuoosg/8iBO3bUbc8FBo1iWC8x15+so4uZOPeOhMhAiLT2sEHQCWLsQN8YgpOOMsh/NTGoeabvk2JTxHimeyXe0h2nq1y/kXFfCm2LgrZf+/Uh85w+cSmbWSLo5+g1eauoOe2OiFdiw0c84t/rjATLwEN2NcEsn3xhrCm7qCTrGvXPHDbAXd3+zyRskKuufVVK3FVBhum0Ggc++rLTWMno9RJquxypCtSnwzdG1Vl+5e2LRahlbwiNPdOmyFfyNbeF02q9emcjKnuFpaUx4gdX2KXLKBIpNDZzZi86R4HGToiMe0cJwpzuKDPP+CINMOC+egRBYHLzn24c5ehkuPQM+TJPRBeejlF85ZXiwNeVGvgsfj5QCl9FZ7YJx8OLjhVAu5RCxnLXdVYgXOGStatSovQ+qpiOotz0xv08mDspRvYcoAqzmSrnB5e05hrYqnTT24bVOY5+nc4gSX0XQVPyNExJXgOYt7hLCCw4us4KyHPHUQwWJai2zob6DTGIeOxeavOPMiP614M63VeJ7Bl6vmaA98O1JbXHVn0UgvfHVSMgPPmJ/pnKQDLngqRGuTkeNkOV4TQb8ILj11p85LGQHYJV7UuxuhSkb3uEnpbmhRTtJdHdSG2D66aZNSbXqSV6mAGrBH9a6xbRjLyfSPDTlFMU14+0rlajsLVswHDRyotN7qElfQ1/vsZwWrO/TQCju+JFrrmHVCUkBPVF5P8IBOatTY/8PQovbCXZUDZcp5iGXwCaplntHO3e2QjeR0ywat1nuJYC9DMxu0guc4fnaePgCViO85UDrANbCH6xYc33Lxrnd5LqBRViM8l1Nfn54DPrqKp6PAuRlHRqR7xIlbUgRzRnR2MbPLOUA0ONHA1zvQQS8WbxH14QAAQABJREFU2B8uPLKLFwB0GsQfZ8kFgO88B4xbVUKECIjLAQcE8oODD8eBWQziR+yIS1tQFrOoFM86RJggsXyK5y/Cm41ZgUtksoon8iqrs55un6FMwRY1w9Eu+Kx1sE59SQrbAOsRuggpjs+sQIchHqsqMk3qrUJM0UY+QZbVTxmsgm0N7LrVIC3HoqUz/Ew+eEpvt3mKSGeYbR3/xKfzrLPSiFEf/CufZ0aJRDylmc9+GHAJy5xtTOjklTrnHndSZtccbvJinShXMjP5RHTejCfB99VKVgJn1OunAF5tyZbksXxpO2xRm5Z4t8grQ3NbZ4DuR2KtdZsBx6TVUsZua9Q64f+Y3qnTzDblgfWajqXurGtfJzpvVQC/Va1HZ101p7W8gl42STnzhmcagoMPGxQQxScax3k6LBtsgOcDSRVvPWQaM51PFW6PwaF3Vq2xDN3l/abp3EDBntKhGZ9m+amKtK+3k8zWKUJJvBIvrSMf6Av0Od1S/AKeJ3P4DkzOjfI9r1LfhE8WVZtj3wlDQaBFGhHnF3ADLKNDRP0puy1HArp65BU14NjjHypB1D86CET9U2R0STh7k6N2sFC2Jk2xpGaI0AlxOLKJHUkQAR3ywiBEJFBwBY//0VEPCKSKgeVmMng2QKzlSQ7RKuqUWW4bnww8zbwuB5etQkAP142M0rwqxg30FAntE2n10adYVIdmNirwD9sVCkAkWeZWyuu2qXFwLSJEekRYGq8RKMYsp8zHAQWAeQHuWAmDov08naCURoVXwq+ATLkMwsQhlw5Z4Uh+ymS7S/ky7VRARVRN0usMeawn9ipJiahqo8jTHnFJqGWEJp3QkFLOQGDhF61sZ+xwrnvoY0G30DfImOnIm32JulMngqR3wBcK4RoPHBboqImC8EO08kgeKlwlRpTbID9mVTklKWUsWQpqGM/afoOyeLuPpW7IL5fZgGcOr4VEl2UnPDP9m9VDQlMWpW1dj67auYxfy7BCG/LytEzfTcS03eb8yw6uaqHZtkdnHHb1VXPCRae+GK3lcZy9vfk+9TpcMmghVNm/ZQe9BRlNUfQWl7iiQOTOuAquzfiFxu8Np5IpjUQepIvxStzVkJFWdrfYJ5XbLfoeIFIHjXqQ3SqXqUInb3yt8HdcsmplAK8QWQN72+hCO2mkp9usJqAQa8GeaRmbtnNnHxGd1n2IMOHCEfByEk/xONig3KIBnOXSXm4RAwoYu2M2SmPyDmyQF1fEBeAWl+iAd/LDQ6QTv0ibkx3rDR4CJ346LtJN+DhEZ4Iw6tKrnTAG6kOkmHKeET9AcRRcJYqgSJchhEgsdQZN04lE5Xs6Q24hIlvKeC0gl6B4G8vGL5WdEwMmi6zsiPpH3SIP11UWyBKpPdyECYz8CuMr2Tl5iXp1IJ+I/OwISpMXZHjc81L+adzz8+dEX8+o6rMlZXESPzu3otxcuopPhLP1ql1GpzfYMLTpAA/ZblvxBi2bBeXTSc4796xftHkpB2xdpLKfIMTu6heu6g5c8VNmyBedeJIAgXyoK8/Ei3oGvABknTDUYEpmB8/PAFWRyKcqO4M3wQva/D/23gRQk6K6F6/vu3fWO/s+DMMMM8wwMGyDgghGUBNQMc8IGn2K+pK4PIxBNC7JeyYvyd8kLolEjTv6/u6aCIqKAioQEUQQGPYBZoYZZr/D7Pty733nd6pO9+n6qvvr/pZ7vzt0zXy3q06dc+rU6eqq09WnqiLstkRCdRKYPHdtKXgYMZX7INfBFF36CpQ5VPdDHiuuNylhgPrdCCbuX27G3X4Fo9lyN7OeMN7x8AGu+uxW6jL3IlHphAoX7h5YPCDykDAPV3nEUWEcyKP9zkUZaeU5t9hYqYSIxhYpOY2wRfBWNCyWtU03Nnc11eDN+mtEHqLBva2rk4K86/Jzlcy856p+eR+ivOWi+FDZAgOfXHrJcbOYF7dwFEoDvSskNgDo7mF2TApn4WAsOFwmIBzQyqy1/xDhmSQeMGYxiwgS2yboGtEQkEZ7yrVlEZycYyIjnItla8AKAjrSAv/EUGcZwJnxbOVRDgdXMdgaUXAwm7aYifwI0UaElGV3eTou6IKHtH/P89w3TS88i17Bw+oFN4OkZD3bOvLLF54rbMMn+ncFcNm8ILdOiTDwmV19aXWda+K438SH77sVjwvmNGKSV0ecYtkoCOWqAplBbV00BnJ1WpfJHEOZNWU4KsC5sQlXW7Z18bI4ws4+i6QRtGvQ2P9KfstDmnMF54WLpHhOUJZ7JriUKJvgnC/Zjj/Lpmon5K4uuLCc8rAoOPMnUl6cqlikRdEeBjNIeSJnnrK5zaYgRv0kKZ95FqiPPAsiU0oRgwYWnTR1RwrUv9UV0/cJ/S7q07RuxS0lS1hV50h3ER1JoWxStj8xYUUwxDG5zIY5+Ds8GPU1fZPikSWKn+ePP5KfewY9jYEwSr2iN6IfPingRvAekuh4eOCwagKcZ9fdjDp4JbZcBMALPKg5WCQbbgDKG07BNZqoDoMtOxqeKlPHFTgzyjQenyABcIrcnzw8vYJyyV9PBsmn8uu1J7TgtDrl7XQgM/Px6pJIsiwOEskFKqKFvGBCHYk/ow7jmAM6DsajNA3YiPLndxh+zA8v0Ii7mQRCB98q5VtbA3TEieBYIMqGBNDdjDobAmRccGkuH3H4pNsHHx0xIISDfASU7aKRnDHA4tBf0S/zi6Aq4ngoCIioKJYmBku5MUTFYlyws6kYphBZQskR3JAImiY1zjJBJ4QB/34Y43JCHRdCCndwZ1rEfaMIEWCOLLAMVZkHSJUh7ZTr4HRWE88oQ7JEHNBKXPJyX6Vty72TaxYDwmF5FY6f5rZN+T48JlE5mOWGfvwvJHhupGJyBU/IyDcQNMhwu7eAOeAA8Q9/gA8+FLdJxmG+nLZy2OeB4sjgY0PBFaiSRp2RzywtLxe3F/yltsMIrjyukwOxnIgLA4qnBcKVZzCIIryCmRYoVc1RmiXII5crL2q/WTQuT3Bz1Rv8Vd0zdeBkGawLP8MNFBbdhyxdNcC3WZKmdZunPm5jEYyT3A6ccZ5wd0FFMI7iCnvUxZFmGYWG+gYY7HgmGQ77FjLgJ2MteOQMcl989NwGuk9YKO0ElrdYvJGwAtznWygoenAcY87PKgQ8XUDl6uILcquueRpEgbKiG9RivgVEYNRIDkeY58ERGr4PdeQX3Dx8IYLgI56HRvDrtoc6cqI8hEJlpvCspxeR2ZaY9VdhurKsXeBqS5eoLIBEHpcd4QIPMAysetYdMBjNonXQixENMH64AB7FwSucrkbWjDUVRB4mdfQCY3ksc1uGyMApVwbFlQYsntTR4eW9oHjWVQqBiJeSLdXnbB/XbzPSt/lwEHN9qB/EVwg2xAHEzI2UQMY573FPYPvyBdXjrcfqxK+H6Adwlov2oecAPTlDiuEWarNUvF6UDQPixVcPWfPVcQ8tSmpZJR5l5onkMAyFTaY8xCdRvmuMMl5FmcJEI2Mcihov6VzyIBvBwQP3kj+T444QmHGc7JFLC/LwYiCFgafgIkJp+ssw3EfmAXkYD/m2plZme38Y4uB87wXNle0o7EX9lfaqQOnRBK90tMI5OflK9erxL1Qnx6wRmnpyNJQPXeh+LqdugmU1Qxtk2CFA50eeJY2+nzV9sbMn2ViXuDPGeRYdD5gyziWO8tiexf1RNmmWHEXy8ru4FOGqcSE4ftLIcMVndKpMrCQ8ZvjFoeatJs4KxkANfkkuQdSOBqLPHc4BD0F8X9NrkhcvnUN2DreHLBTpqNA2M4I81M3WieubUQ6ypO2mSQS4mBLWKHaY0bNlufAMN6KUHckNVH4WXSmUZh7SqWDE54VqyEccxFQaDACX5ijBo11ekEWBP+kzP05RsWS0EB7jM4az+yE9aMCbg8gSmaM2j+oTudQ4zLQnW+rXSHsSKVwRfNH8AJC0xqkfd/VyiHE5Tq/S9pAPXciAAAONdhNANu4z9t0dIAO7ItMo8ZwEcxY1xvyJnStTLkn5/VzBSl6lzSehNiV3Sq4hHB+m743E+aoQ80mmCDjaGJXmYuWheTA9W67vj0PmknBf5B4QjtUB5tAoCA01cGuU070DMmgYF2XwjQWypYWvKx4IR8v3E7PllAYGc8ZzyTPodOW762gZLvWnK6LUjpDLAcxAIhBpLCjLxYvcQ8tU/XUyCy+VUygq7QFEiCMk2yyDgn8EP5hJQMvN5Ur905A7Hc7309WoYF0SeipI22q1yP1OyNSCQrK2o43Yy0yHADA5heCeCbY5oR/A2ZvD6RvPMT9OLo3+Gni4Slw9V408E8QtGKTrD2ZqYBoDjROMK8GjGQlUioI8QHB7kU4q4gE3mIKhqQ6nYFkQPm9HUoi1U0pbeBcSxCE3Us+8NMBrQKaW6gYPmmqjqeLk7Nhw+9LkQ54fQrghPKHD0M3BFmTjSonMD2muF64WBX/Z95zrQVzoylH+g1xiCNvANmzKc52QomdewLf/I2Nb+AA1NsCtS1s0u05IlpWTX5eL4m0mYhwqcJ2hwPw4lvLH8dHkolMZBCSdwiEI1vxCCMjnW+CuwNE0kgd4KET5eCmCIzC7tVCcdhIQDxdpl9FCWn6JQimuJP7aEXOPeDoQ0nbm1gJ8+WLKFsbwLHmBy3VwiWtZPPQ4GeAVZ8ax2hLjvNSYloeQrFyp2FAkz1oH8Vxe/GwSFg3quF0cUBbaKcY9Z5Czme1k4IbET56lq/KjRzRivDu8Cr8dsASUR5xdGVwMcGyEi5Sy8QwoML88WKFQZ8dLAGBJ+LVQhQCcZLLJFMmHMvk5tpzlua3POF2S/DxSSsmhhxTKloPtPVFfRVpeQvsZ6nvc9L0JiBsNJ4E8HxT1ifw80XNAV8Ds84XHiuxR6ltxCjY/s/D4oIeC7VQwc/ar8MUMezTGeHmCU++a1pK7ueR61MinBttwgNCiQakA3lJcHJ8I/JtWr5MIyQIJoai4MYSwWgiTOhFLkT+6UU0WI9puRA9NFl1DHsmi6luD5AGEJrrvXr4kIzwHyKM/TZMHX8rKukq7AU6Ipy4zDUf4a1zhG+LJ+AV0yuXSn8gQYIBrIe6CsrlMpIW3NCJ4RrDLijPOKcmyCi5elEFD/9mwRq7DBwxoCGKE2zRJ42hQLsMcIvBs2gGIn04zH+IX60Zrzsqg8VlaqRNLkv1HSs3GiutVD8/PF/5y1fkaxvfD6z+jfFjjqBPNnPNiUDBB3whdAo4rdZ8c5F64OyHb8YnWwBM/neZtGy114i/wmg5enZrmBwZ1eErddFl56hKiA4+aRZIKkccR0iiDHFwMX6tlAlIjtvmubSOBgR/3jurC9wNJwor84C2BZcEVcbjARx4TWRiYi9uKzQB//CyuZUV/OcLMmIeMRwxxedEEGQHdk2qz6+jccm3PX3k2EvKmFMX3A3qlkAc/hc2wAes66njeCuC2W23lpRjGeBi76oUIx3WobltF2J9ii7LritiodGX3FVzxgAkc5bi4fqYEVk+MYL5r135ed+4bmMLAZ5ia5g6FKil80CnIJwaBKeKQi8uMyz6pMMpoqYFSA6UGOlcDO1d8jIVLvFCJuK7PszvgYFEhDRpklyNUf//lpvq8c2xXSd2kfVmiDL+zDvSb2lBjZq36M4RGXKuqUJ9PrGBndjuSGC48knulAxrjaONX348EnBlZGssLcbrZkekc88NLgMNkqmgMZWyQKdwkpsVXsjmALeU5cU+lxsPvitZQhgY1oB8JYZFo74Tg0mxku+SBn/3E7L/hP4XC2qvoZ3kiBR003RUY57rvFb4aFnPIFQuJC8L2u7h44vFWNWKYy1sIrlJJD79MlhooNVBqYDhqoHrUzdRkCI85Vt5tD6hyaNQDy03/ms2WCgODwCPfF8lyA0YWf4+GB5gM/FZmNTLr18ry8/CCjLWDYxKiZ8nwHoWQGIvFQNYDt7Ku4ll3IqyBU1kY+xycS+a4lUFoAUKcs+hPVL4r287QAyEpO2FCXDcLj6K4xTGs6T+QWwRBPGfIj5mToUMb8vZWQAdZNYN+cNfapaessluZ17774bdxKCurr3X4zt6MXVychmnnLHZrIbQjTz4YLQaFIc72Ks2wo5nzGRVaQZQPT2xwdyXo3ELxtHtdwMWlUHkpyK4qWByDIIZ609Wz7Mq/pQZKDZQa6BgNYMtEF9DBh+wZ+cRvfS1oQMA/+uI6wNstEhH7t7ipdefrwqdOgi8PSihDhgcpT9LUxRIzbTeIHE6sJi5+uShTygdb1ESncxQl6D6rAGkB1EzqWFMKTSsMYDZ6USLqpAwBMYYZ3+ZDB9qgj7gKD7riH/7bg4oQldo4bE7SH+EPMJIOjV2b3BoNkYe3O2VyJR8XkpTHztY7Rq649EsGXpQVRdLZuJz8mCAoiF0MnSUKftlysha6NFB2Pf7NsNSGcdS/1Cuw5flSA/2ECazlhSUY1pbiIO4BkucoeqAIAPezCi8ihbwis8R1mrKdoW/xfJyEKPkTUoRHkdvFRV6UPfqCSeostCDurYc/70Zaq2WpG1xtbgkpNVBqoNRA52mgKkdHO9F01xfHaXAg/3ODhUluFxdc+2n2HcMKb61Ydf6VbkKDci1HbcABN+pcZYgi3hHMkdiLwnWA6CK0ESCKoB+WMjqlT06XNhKbBl+L5cteYxgLidNrkrdKKb3zN4zE2KW4Au7I2CgHf4KRFrkkMeRpvx5kRLhC49AtLv2V2XRrGHCuRYU8XJaSUb6cEJwPAUQ7UNnMtJk/KC9nACZqnJ8iJ2OFJvdYgdofLaCDesKIjgSvVbpqoYgiWq6r3A955kAksFwMIiM5HzZPaNRDjR8gliV6/mBwk6IGqN+lvZcgKc+is28687QvubKIVIvGTzM1bq+brSdJ7nxyccGjkye0qsnkKavEKTVQaqDUwPDWAO9xXacK6FVlFpT74v6jtHsAfVLF51XQAkFmS7tUH0xRPrQGOFkhZeSIOcWxLDaSlxsbloGU3aSVIGU2a+QJH12XWl9y5FpMZWoLibtSvjPSYfyycexy4q8bgmp5iXFiR1tL73KI3r6ARfcbpDbTMcGFpBGY3i5OvSxYZFsCNRqbdET2tUDybJb+K/IBBqNKpzVeo3ERPS99q8vX5baTty6naLyojtL4d1L90O4aCz5dbdtN1lPj1+KyDJgwcVm4DMgECp4RnhWndg9YtJi0MckbowrLTPug52WXGzGVISs0VGAIlsqlzCg1UGqg1MAw0IAeM7S4GBBcn8czTDRzwycnCz6ucHHBjDnjUhr4GDyQh91cAEI8q+8ErfOOYQL+A6K8oZk+n2ijourzwdiQNtumqXU8by2y8ayQ/DfN2IUeEeQqs9MMg0ROKsoXo0Em6yJ5I97CC8QqENjKYGExnU0LXy4K99znx2ixHIqzywm/bkR8FUEIFtcdZbs6KJpWRQtxblCOQmWkVazBstPYtRrekjo2I1RD+skrdfR0xBImyhM+geeBsqL9zoUGV3qmLDxmyX0rDHfpY+WqUPhZATyQp9DqRgM1YppBXSQKIUKChGB1a1QilBooNVBqoIM1kDmDLoMDTgWFwQd3PzLAK3Qc9QBm0CnO44Yz0jFbniChAQHuL3bBkzVutWEls6AVd0w8FVBHU6FeOKYBb+FZh1FD2bb0uLyQNA0xThClc/XL1+rSerXs6F5RECPcwuhvdIM414I1zBnVdiynuqK6nG9Lj6SL1aBumwO6rymcoXnzyOpwEnCMueCsmVrRcv/V/HQ8N4N8iNzG8qE2jDUYZTQsXBOEfhuN2lITPDuDNNRuNczWNHZHCUntcHiW3OU7BckzDOMc+5yj30XgtKBS34y+L6RTwOTn0Bu66BppBoO2SNR27ig6rZparDJeaqDUQKmB4a0BOWypXi3QOWN+E7PoA4dpkCBDjs+JwoCCHVwwONT04ASgTbzjeVHEdXB5wc+1YCZT65oxOKh0FI15J8vQ5Xlx0GpkSUc8PfwGksVYCbZXR11uNCsNoOAnq6HRFQrb2bq6SbyYF2a+2caNkEm3Ljto+4pMioWWLZ5JdyV6TGBWJEgTgoFTSq6AM9TlsVJJIVagjKgncgAT/ERhxXhrZvXL0dhZ8cZlyOLaTF7r6taMFELboH7sm6swSbmm8Zb2kUJGYPE5ZwxhQ2S8FJINc/Cg54W+aHJ7Y4Pewmz7qy2DMfUXNWbewJ9a1sxkcBeJkhChexCCNVDFkqTUQKmBUgOdowHMylDnJrNbiCPwLJ7q9AQOP0gY6TjBrp8GCV4gipl0hSuVYxosLE0NMgJpBD0K2JkincuGXytHel8EP50svHBK1yaNWHQf5weEiEBRJEaXWEYWUFgWX3diXDMPYQCDnLCjpESkIOLlQHxJ8FS4EW9BVnksj2gnCZdSBCpYAo+uUq4gRhkpEcFPyU4Dg32qDAmivIIkiJKJBmVMMum8FPcnnSdWYYkSz2qgz6tlqNuExFVrStxvgru0YDI/SvBWishGf82z5ZQD49yxwgXipImUBq+VtzikXCRaXGclRamBUgOlBupqgA0tGhRcPx8NEJxODB60FaJgYSYHMzj4z7M6lBOcoaG5TwWPjPzI8vPFQ6mJockiJOTwaQJp4GNEKkoXYBUCBSQMoQ0+zKtvZExEhnIsUjxg29pEJ8ECxeOjqKJoLYrSSlQeXJ6iVhPRImI/xisalxvJnMBOJmqpkvk1qVpha1CaAeSRuRn+WbRDWXaWXJ2WJ3pCHyTxlssYP1Qe67QWG/W6Dp/w+GuifTo0E+smqPBhnLsQ7dwigLZdVfmqjHKRqFJGGS01UGqg1EDLNJA2dgQKYEcEMbhh9PAYAQbIsYziLtylE+fUA2bhMfuYIsrzDCqNEdPVi/nl1MNPz/cH9MbkSefv5yQkTyR8TJWGzthAiAliOS0suBuM6FquiiWiYiowhxqcuCwmU4a5GPmxDJax8IvuNYF9/VrM9L8+z3RMZp6ZnZbp1SwNDcLLa2s6To6c3OVpXihbjMKae6MRhzbeUN2aEVl0oXSj24yON1OMT5uop5SdQEpguBxPGpYdeNzbKmrCYz8XguOrpOPPxrmUhavEFSVH0+A+XkbakzTCLBeJRqooI6UGSg2UGmidBhL2cx62PEjYsaKKOI859AduLxF9PBBhYZQYEZgFkrhFBYWdZY1JldERAQcpIgO7V1xcLy8jkIxrjiHWqSeAFwIJbVZ5vpGdNG6FQ4g7YCo/VFeVzRwoLS9eMUcPKTLKHf8QX8oKGebCM6u+gpOsp0CH+JpS1yypdD3kWdCwLNpgXgMyBPm0EIj6SN2Y7VDJOMjl6nbMu62g8kHD2HuGVM8Z3wa8+MUcY362XwnNmgM7pog5IZYGT2Jlp3ypBbvAItE0FsKqvJYaKDVQaqDUQKQBXmyEccR24WIsSBp4PowHYN5NAOab6/rZH5Jmd5wBDzrmQYMkYwHNxW2e7O6ClAQ3sLdzYAVvPWi2oCwZdfxBUOBSu9A1D46m0/rVcG17J+A6kVVYMC8AVAa5bRdRC9AlRfHYyEjy+sB/f41ZuWGTuf6/fhPh+hGh4KbjZ2alW3BP09jLs5CWXwTeLK9m6YvIWhR3sGVDeehvBrvcunrx+5uIQFo3AIj7vUeEmKgTDinC8XBCLfWOsZOxlupD95uqmNyLRBMdr2JQJMoVDwkSghVhXOKWGig1UGqg4zRgB4bYpvHTENiHwewCTJlfGBwZ1eIiGqfdgBL1oR6uK5y5ycgDBlkh4qWQ/MFQKiW4nCb5EmXE8ipOiSjQBUuTAqbTOp5ggITI4mUIXw/skslcO9gmYWE6D5opGHAJQdj6ciqD3ONqX8A8YNwivAyVnDl5krnk3GXmzO3zzfW/ulvlqCjJISIBquMKKxyV+x3OrYFCPeBfV00Or4ZBTkAe/nlYRUZXwXrm4T2ccVi/pJOOM9TxTNXcq7wtDqRUJ+IRtR9K+3GuM928CC43ErjB8gUh/zXtGRxUFxeIGxIkBMtftRKz1ECpgVIDnaeBzH3QM8RFf6gXFtohQw0P0YCkYMxP9aQYOMCH/6b84cHFy2Myn6/ghOAhmODXv2pqX1Y/ncrN1TU1P5ChXYIwyOYuK8ArE6QrWINImXVkTxrlYWaRUUn8X/viF5gDBw6YOVMnm99berK58+HHa0otCtD8i9KKXuXq06NGyAvXzMdOTye20EtHq5vTTF3rMh9GCKKHkEGedi9bWr2aQmoAcXH6GYr6Rt2qpJVZEls3aXGWL/8FKNAXSMlyjQu2sTS4j5eVFml8nPwuLj5lo+lIgYpBCKayy2ipgVIDpQaGmwYwuHGQAUTSAAKm0xbT/kVvndHrx3M8ulsHgUuHygNnDefyAXRBsxLYIFwzqsml5xIrTY8iv9QbaeBSOro3DKonhdNsljCsT8tbio2uuvwIGI4kDfIwjkAjcVT9X3T6Keamex4wZ510orngjFPMnY+ssOgkQ8+Y0eakObPN5u07GDZrymSOb9m+k9OSjwRcZPYdOGhblOIvOJLPhPRn4ZxZZtyYMebBlU8zSNJIaFyhhwxcrpILeHupzFAY52RH3l56AVm5YXOEdpIrezmVjXojIF40sOGm6lqUvga/wH2voR1qgNaDjg+2XDWPZg3ASiS6xjWSF7jylODqaKN8kCp+Quvy5eWEKQFL0IHWhTS45Ddxze3ioqrRcHHgEeITgjVcSElYaqDUQKmBTtCA80GPRJFBRAB+2sF5e0bZ6Ys7/3hwifvKGFbTqyILQa42RX9BTUBdbg1OhNwRkbi+xcWRWcAEpa57IiM7wXKEaDVMxzPYaSO8GfX7urng9CVmFs2cP0TGKfIuv+h889nrf2r2HzzETQHG+TVX/ZlZuX6TmTVlkhk3dozZu/+AefvHP0vG9Wjz/73tTUwP0Tdv22H+5tpvmVXKEAYcfP+NeHz2uhvNdcrH/d/+4s/I2N9p3kG83nXZK81rqWwJmtciJ8PXfnarwQ8Bcv3be95mrv7UtZGBL7S4wtj/yNuviGQD7Pu33Wn+neqG8O7LLzVnLVpglj+1mq+AocyrP30ty4R03UD3ztdnXZo2IzTTNpoVTetCx5vlW5helOCEsM4oAYnESK55BoErTHCNnz6ZSZdtbG1uLKEuBXH+UTm6XxF4TNXaGG0PQEXk+fHJczh9rvGfVVPj9K2tesmt1ECpgVIDbdQAfIwb/fFAQoMJdZr6x2MNBiF0pvxDGRKnK++hnlauHZ4wRPFppSRb7T+Fk8gFXH6gknj+q8ipaQXWiiurBapxv9ySaf1lxf1asw85dtjpyv2jo2GpqliOZn/5xlOtsfT4Baefygb3nQ8/YW767QN0h4x5EcGszQI6G2Ccw7iGgfzez3yVZrJ3mT+/7FLO/Jsvf8vghwCD3dfhvgOHzK8fepyNf8mDzzuM/etuv8ucSTPYMM7xEvDeT3+FDXm8NAh/Zkx/au8RcsJ1e/flr2Lj/N/ppeDqT32Feb/2JRfQbPkCRWN4Bh/5N919P+O/9qILVH6YN5eJe55Sdl04twHFWz/vDdpKaBv52kU78KQuwlvSQ3x1erU9D+4XQkAmbFWbeT81XbKOMNQrlS5CsPAB93xL2l5RptDhGUaI0w3HU2zw3DPoLAML0+Qf1MUPgNma+jk2nZUXpghCX7xwovnQq08O5uUFrn92v9l/qM88um6X+d3aXWb5hn15SUu8UgOlBp5DGqhU0ZkXD6CrosOuGzwcWD20JWNNAJxQeXCTvlSTWgvOkcUZsi27zYjh4XRNqREgVKRk+lwFnnlNyJuJWTfTujXURauDIDVMRxOM3PUtWMee0aPJpWUJuXasoRNoB8zqzZvZFeSS85aZW+6zxrrcz+t+9Rvz9Vtus1YyiQz4WYtONJ/9wY3mrketz/qsaZPMn7/mUjNr2kTriiJVI7luufd+86Iz3mROmjvTrCJDHK40CHc+8pi5/EI7c/71m35pHlq1mn/Ixwx39KZJuBV664ScCPoqcc5wfyAbDP7rf3UXQyDnNX/xNrNs8Xzz0OrVBLN83vvv17JbDmAvojJPOn4WPQ6ieVQ3joORuDCwncech/4PJJQ2ItdBlSrSUVJXgyGDNYjrlyRdY+ZsOuohiKzR2vogW0PRPgYwGxLoQpkFwRnfvzEh/PrVSGCg2FCgRaL5uMd+jyE2+WCQwa8bKEOwfBwHH+v4aWO50MVzxpvXnHe8eXLDHvO1Xz9TGuqDfyvKEksNdLQGggvXZNDQA4iOU42YLoLFPbftJ+N0ovLAR5Ar4lwW4PgRte9yAxwviBHngZtKtrJ/942s3IL5enHperKlaDt3sYJYrxzBk2vRci8g33P4gG8h3+4zF85nNnBPgU/2LNrZZcuOndE4C1nwkzIw640Agxw/HeCnLj7qAsfCU7jGXHLOMvM1ciV50Rmn0qz6Y2wcC472AYdfOgx0KVdwkEbQV4nbnFjG5SthiNsgfu6Slit85iXAn90PPm88KzUwnygl7Z4ozhU9pqAWAjcqT6FCAsh4rnhdhuuf5DmLXmICNK0G4aVNQqax7tCsqPpOCDVdkYln3NVH5VAUpr3VtP1reYjuQ3VGnuQneaXDfbystP1qUovRPZDPPifh0sSrZZoKSVNYUImpXDoqA4b6h/9oifnID1eURnpH3ZlSmFIDQ6yBrH5N5+k4RObRoLa/deOSHXTQl0pw8RoK7JsO3vjxGFSDIRwIxfFL66MFU5fLfJUcgtPElcUkep8rJPdheYthuhodp+uC+ep65i2oBXhRHX15hXeKXHAzQcAMtsxiCwnyvn7zbZJMvX7tpltrfMBrDF0n152PPG4uecHZZjMZ/ghIR22N0nB52Ue+7wiIcwCt1MuPA0HDKClGIrLw8iEBC02LhLo6LcJMcOk+JPim3BdB7/iruy+JOpHQnJZ7NoiVkCLV0Q+1pUM4foyjSAJnQJjw1etBmIRg+r4RHr5eRnSKW8V9meSXGIJL2+SrlKPwi0bZmyZA1J3TPm+Fec7Fh8pjHQeEazVo/Y5D5gd3rzdL505k1jCuWxHGjOpiI/3tX11udhygo2KHOLzt/OOiOkKU3z61zXz3/t66UjVKV5dxiVBq4DmogWb6NUvLw6PSnEvzoFKPu09LbEDnDSZVZ5hjoOGZI0ITzjIIKQGSUT24JXMaTknZctWMQjCdjzhqDTxd+3p0fj1FD+A32CFLVl9OkQ17n2MWHDPLXycjW4e//7M3motDBjrut0Nc5Wab4Zv+DbX7CQzh/TQrLXia7y20U8wl557NM+7YVeXnlAae4GLm/maCIWB2XwJwEbDwU4LOFxiuwgtx8JM0dqqRIDCkdVzys+Aap2hct6+EkVeUUYfgi+7k2iFisfsVZMky1O29kDsS1yCOSW0AibE53/WH9tkiCGULnZ5JB4zhrs8THHDWcaQbCSG7GHy6Q28LoQJkgiWUlxdm6xaqTgiWl2t+vNXbD5rVd20kAvyMueb1p5g0Ix2uKzrMJdcWGOJpAXmXL5tprmX+aViDA8cLiK4X/OXzhEbp8vAucUoNPPc0kN6vYUCQ2ZgavbixBv2lHT9q+bhxwg0OyZ0FhB/z991aHCG7shB/4YNhxsblCi615QrvoldUCdz0tSiPVHypBJRFcZSRFephpBnCNTzrFVRD0DggS2aZPb/uv+4yD65akygERjJm1M9YOD/SC8SOzXNsW3iIjOn72eBeSDuqYKtDbF2I8MZ/+NeE6woD6Q9cWLBVIlxg4PIiqvg+yXDZhS80H3zj5fRicDbvFgMcyIYAtxvMymPx6rf+9i9dWbM5D3/kVlqAbX9YzPrWV7yU8N/Pu7LAJx0uNthO0tbD4uk6Ra1NBItKKCMJDUA/Vn0W3KH6knmFfn+qOZK/mODW+NaagBJcO2JW0g+KcuJ8TWVpBCeZUyTlV0toc8+gJ26iUBe9ZtWxKK8247/3e7UHPGCR6ZsumGvED90XYf4M65/uwwc7jZeJRoI26huhL2lKDZQaiDWQZVShP9X5idkayeMr+MngI1fKoP+cIxaNSzuozZY8C6z9m6CpzU6DQIo0UpEwRCt5cg3hZMLS6hMJQ5yjeJJT4oWoYQGSPNPK8rAaTsqLAr9oZcg8k2a+YSTfJXueuxJBgt1aYHTjhxl2a1iTW4qnp8/+4GdsLAMPAYtNbyGjXft1c4b6gzJh/OMqAfjv+ARttfiaV7JbCrZehHF+vdqS8ePfvs685eUv5XzMqOPlADvQ7MHsuicX+H7t5lvN3oMHGAf5v374MVrQ+lP2q0d65UbyNwed0FI7WbnBTsJFMBGwiavcjyZYdB6p6Ewk89MC7/SrWPDcR2RVggxv7k/RVwTwAAqAE+1L6yINX+PkiKfOoIelqeUoG8rU5uSHoC4hQQDL6H8y8/KX3jzmr1btMg9v3Gu+/KdnBWfTl8yxrjPNl9Q4h7Pm9ARlq8fxVUun1kMp80sNlBoooIFQX5dKTgOLHhcSC0x5IAn0kGkGKxWieekyCy0CVfxRuuYpcV8qgesyC8VRJuqrr4UYWGTfmGK5XH2alrEBefKSJF8knHZJ7iyZ/+Xb1zN7HwfprTTL/YF//0pUvMT9tonTR79ARm9QbxF1MnLBaafwfuN30QJRXXYvLRz9O9pDXQedv5p2ZNH5qOX1tEUjQpotgHzBYUT6Izw/f/2NDJI02k4NTIgavPJ9aZC2JMupgZDB7JF2kStHzSy6h1OTlL6EMtDWonbiUkhLu+d4DQPbLv1nhtGIdxAe4JEF6ldSaTxycdHJrHhuxFQmrITQTQjBUrkMbQZ8zO9fvd1ccMr0GkGyXGBqkNsEeOUZMxri/LLTGqNrqLCSqNTAc0EDjfZroEulrdcPWwMXY5Lf50f+5ioLaDqAu8B0HDgC9+NIFw4sYAqV5Mk1Bc0Ha/nS9edTqXTB8hRlFNUy+PqLkLIidN8jHqltIMlAjIsktGCqQN0xY38ZzZxjf/Ov/+yXBQtKokd1dWA/ncQOpERu0ZWkA6hNgYR/U0w6i1jajf5611kShqWRBe2JnV6k4UT3SfWT1CYk23KMn8woxnRI0S/iocoHLABPtWkVaZ5oUr6YojvdqzpGQgyityu0k3c7ZO7dZVent4N3MzzhghN6cajHE4tDS/eWeloq80sNHBsa0P2tjnPtaDDTMB1vtPaDZQg0IqvI1mjdfDpfBj8N/LTB2OeVmoYRqoyFUBmptCqj0brDp/xyOgQIe5OLb7liWyjaqOxSSKTLdhnmrqBm5RR5O/LqPfNDJqO+h6p9Ny0PeHnPTJhnsu/TOGn3H/C0PE1fL55mh3frB70ek5bkhxQfgrWksMFlgkOMigS4ozx/3kTecWXahJFmyvhRTH6ADkJaR7zW9O4zq+j3k0e31WULI/vly+LFNnUJCGHBlNHmDS+Y3ZBRX49/K+tWryyd/4azZ5gXLJpqZFEv7snarfvMr5/cbuCiVIZSA4OmgUb7NU3HcZghMgzINVQLhxdZLTEOZp0C4BihnTFXHy5f1y2lzEYNxxR2tYOzNgRSiTo0Q2SXawNiRu0gx70IscdC1N+/+sNxVgE+Lb+3BcqOBU6PQb7hNqOcXps6OaK7JtpSnRLams19mu8CgsbNXWQUsTKgrvjpurr6YwOUxDMhetHSC72GUZzpQvgeXqPJ/CeJNlrCMUiXthj0sXW7c9UWxutbX3RC6qw1XGUwoy2z2q8//3jz5VvX1BiYmDG/+PTpBr7vWe41OFAJv6Ihi+7ST94TZNequglzvHhkyf6xG55gvUwe02U++rpTahbwYkEvfviy8KsUmaWs8lpqoFM0IAOG9UWPUiSei2OgaeXAoAeuQVRCyw02X3apl1z9/Dan5c41VcwQyd6UzIq47fdYldVMVOSUazO8Op6209uUyNdgH8f3UNFyGjwVLDbWsyY9BudOpkmQewY9sWipCZlDgoRgTRTRVlLMOi9bMCVYxo8frL/XOGZ433zR/CB9GhAz6x969cnmuNvXJPYzXzyzJ1WWNF7thLeybiJn2suQ5EMHWLgbMs4Fp7yWGhgKDYT6NQwUvCtHHYFCtNkkNPiAdzTTno6tecOARFpfNaXgIr9lQQZfYij8W8abGHWSgdVo/aSdtKMujcrUyD3iejRCGKBJa6MB1OIgfnaKkw0nCmlTkLmlz3OnKYEqZ/tY22J0G5S+N+25wrMR+oLC8JR6tuJ5StvuvDulzFqwfvOozc0F4UYR4hOC5eI4uEiyzWKo1Fse2Gywz3pWaMSA1fxg2K/Ysq8jTyxtV916Ro3QKqiJ94zqNn/73xbXzJzXIJaAUgODrAE9CEaduOvrQnkCk6uIi3REL0BclaHLQy7xToBAR99vQat56jgIJC1XsJYQgkle4oqCpR/3hUggti8RySpyNFJUA/WIyqXyfF03IgLT4F4i0mBdxBhLM0Rq5Bqie1YjRx2A1nUd1DJbaUC3JR1XKJ0dTXkOAM46xIgrJbTUxoPth5m4HJwkCiKhEa0g7cN0nsRbfM3t4oKOp9kAHiE+IVizZTVLD9cKCTACT507IdUIvPPxreZTtz0j6MErXD+yZs7F7xzE4toSYgTXmOWBPdpDuIMFa2fdtu4+GPmTh+pz8bL4RLpQfgkrNTBUGgj1awKTq5YtBEN+GlzTpsWFVq5peGlwbej5s0+SBi0PakNs5DVax6juIr9co4xikWbkCBoQxYqnm2FfyqJrUfom8Fsif0r5zeg1hSWDc7/EZDHp8DytOx3vcLFziVevzUl9gYd4zf1Wz7vg+gUDnpXn47cqndvFpRUFsmJCbyEhWCsKbIJHlt+zsIVRfdMDm3KdHgrDOi384O71CR7wp77yohOCizdhvMMgXr5hn3mSZtNBKyFNZpyKmnWaaKN0Um476ia8/+lnT1P0adPsDL3wK6+lBgZNA+3q1zCgJHi7oQeXjOCwGEPi+ooMHsA0DyqH2cqVkexQxXDBTcgjwBZd1QDaIo5hNgXrkKh/mGNdaI2xUJciB0LBesCQT7anHGUolFboQbGzUZGpVfd+1ChTnTEzKqZv4wZj+vpsuqi+Ii6BSKvkDbAuQSka0PdP9I9GSbPhtm3TTuUEj1xXGF/3dLY/Y+7I0/ykyBR4qk0rdE1ec8+gN1kOk7flQW6FYA3wEOP8d2vr7wwCgzptVvwB2lP92rvcqWdODuy1/vnbnzFnk697aPHnhYunsoGOXUn0ziRphjaMc78MXeVG6cCjXXXT8iH+3ft7M79A4CXkB7/byPr44ltOS/3a4fMt06UG2qUBMb70TLOUhTwfrmHoK9WwwWQJGNFLGjGfFwhCO7dEfbCjB14E8+LIa2cQ/aCMaPBsR4FUVyrAcka8xeEPzllmsDc4wjdvvi2V+4zJtKj/3LM5H6d6PkS7oTQdAvXR5WTJ03TZbWAwY9IEc8kLnpeL82Y6EOmWex8wZ5x0ojmLfpKuIe7qMiNOO8NURo+O23pPj+lbEZ+AWkOTE3DBaUv4lFZBv+m395neHfVtAsFvxbX1LboVUrWYh7RzeY4V+8RuLshXzzvrhtJR/yh8iB49QkJ3Kk+xz4wm6DMxszP9vl6wc8+gYyuaZgOECC1iCsGaLavd9DCcYdjih638bnukN7GAU5ePrRTTwt1P7QhmwUhfsWFXcBHo/Bk9QZqhAHZC3eBiZGfarQbuXbm9NNCHojGUZSY0EPVrgb6T8zx4AoY8r9f2klE2wzG4ePwSwviJIrg+bWZaGPvSCpHke9XDICoozV7jIhwn4hzB0ksRFGBIPI8o48aM4aPrgbt642Zz18MrIjLxesW9hXGOI+4R3vnxz0Y4uSNBoWrrM3PKFPPWV7yM2X7z5tste7QPMV5yF1gfMShSfbIAhuU0S8keQEqAltNLzs/JQD9r4YlcX0lrJFS7e9FiY7RxTgjVqdPMwOzjTP/G5OSYps2K9xC/D11xubngjFMTaJfR/vCfo5NNb7nn/gS8nYnaFtDO0jqPN+4xP7CRIijiGmYEYiSvz6Fn0n0f5EqhB+I+mP76weaE4OBZC/fp66X93SIFv8AiUSFp8hqqSwjWZDGDSY5t/OBfvoB2FMHMN4xrHZbOTTfQs/Y4X9O7P2igY8/0TgmdUDf/4KjrHtjC7j+doqNSjueoBprp15qhFXW3gofw0lc32EWz0ok8SbgRUpKDeW2y3kUk7ztyxNz+u/vMla95Bdfw9BPnmTsfrp2Z7aeVbOfTbCvCpme3mSdWrzbdo0abSrXAQeE56jXQ3292795lHnjiKSqpYo4ePmS6R9J4wbRUsxw8WEjvj9YJWOi0h1osibbELw7Ek+J9R49E9NDTpme3R2k/snL9RnP00CGzobfX3E/1XbluI9EfNV3dyqyBsDqtmQDeoD7e8sqX1hjnYD1+7BjzrssuNQ+uXG22bN+pSyvj7dKAfw8lzVf6k9pY47bHogFffr6saXDgIa9NgVxc8nHXbxqNysKfNOVNRn2qyCdBo6U2Rhfa5xtbLL50yRRz4dLp0aFCmruc4qlnc5GfZVDf+L5zNYtccTnQKBdym5E6sW54QdKuP21WQcm+1EBQA0Pdr4XK1240IaH9fJ3m/lsTiaGuYcM4HtJXver0HTlsnl65yaxY9bRZQjO5MMI//4OfmGqXMhKJySjyhz3peLvxwC9+/RtzcM9uM5Zw2HhWhcCWgBzapvDTCj2OunvRT37Vjzz2uHnr1XeY6oiRZuzkKVTG1BivwZivGz/dIFtbTyX74X17I1b/+aMbzWe++rUorSPVESNMz+SpZsToMeYHP73JfOd7/2FGjBnL9e0aNyFCZd3t2mWqE60LUpSBCMGz6qHbfoKOEq+lmXKEH97yS/PBf/yYgd4vecmF5qN/9X4zvmcsfyn5xLevZ5zyT3s14N/DxDPEbcvHUPKofGClYablcRtR7BqPhksmF5e8LHMjZjN0hrnugIIzMdlchiQX2yiuJn9xzNB++orTUo30sx7qTWyF2EkGdasVdyzXrdW6Kvk9xzSgJiFQc9/AjfwinVoigyDUR3qqk95Y+lGfly2vn0YcwnQGkPSzLIfAPL6WTrjaTF/uAEkhkAygaUTJ0uNB04en0bcVDr0pnUI3B8jY/s73rzN//6H3m9nTp5p5M6aZdduSs6fnnUpuFi7ceNNN5vCBfWRMxoaz1olfTz8tfKKrupcD/X3m0P69Zu/2Z03XyFFktI6J0DolouvDaw+cYANk5B7evy8S88Cu7WbnxnXBrwyoW7XaZfBlou/gQbNv21YzavxEM7JnXETPEbpXA2SIB0PazLogu+cQSS3z0nnxoX9f+/o3zNbVTxpDXy6+u36NWTB7pvnLd73TzJg4gZ/3Ql9IpNzymq4BdU+AFPWZ7gbp+8RMGF96SyZgcOYfr4yITwiOzDR4ZiH5Mgd1kaitCz0wqkPJJ2ZnYWGG9sb7NqUuWpRFnJ0ldSlNqYFSA4OpgXr9nAwuGg9xnU6Tt2YgQp/qAzEu6b5Wx9MYDyIc4rKIrkw1jCak8KuVyGx3AjrzB2ClR7hTQO6f3nILG+gQ54VkjK+7I3nS8pknzUeW2UnG4l2/vcdMX3gyzbJ3MQx/ZqoFpEjvPXDQ3PLb+80+cuHQ4X/+0SvMSXNmm5UbNpkv/PBn5jUvfqHpGT2KUeD//qv7HzKnLl5s3vN3f01yV817PvEZzltw3Cx2vdC8/PjNVB58unXAAthLXnA2l7dq/SbzIH0p6PVcNzRv+F8jnH/6KREbLOSEu0fo/up7C2P76OHkWSIwuDFL7ocq6X3k2LFmxMjR5tUvvdBc+uLzzZNr1tHXi58mUcmF6MzfO99ctnSR2bt7j1nZu808tGGzWds9ynSRb/rR5eQrrnQ8lnzLUd9xTqebSe5VpOtVpFsJjz7xhLniqr80u7duMQ89+CDLhy8m/NI1wn456SdXnSOHDpqRNKtfhvZpIDQxIe0MV92+WAr/WW6faIU4i8w+Uf5Foj5lg+mgQjtUaVlVvPnxbakGOvZML0OpgVIDz20NhPq6kEZq8HL0h2kdeoJ/Dj4J/HYmlFErsvtXKV7gkh7KK074gzzRQO/ptIvcSEaPn2B6ezeZhx991Jy+dKl58dlnmO/9192m4gzwvsOHzUXn2N1bfnrzLWYUGZ34iYF+xcUXsaEN/2UdLrvwheb/fOXbvPBU4DDOz6QdS7BrDK5I6/DObdvJnaZqzj3zDAbzjDLJPI54Az8rLH9qdfQygp1gPvjGyyMaTfu1n/3SfPOW2yNWmvdbaHHqBco4B9JlF57PhjMM9azA913pd8SYHjPl+Hlm9ITaNVyYmR45eiy58Yww806Yx/XtHjWGvhjcFhWBhZxvfdPrzGVnWN9/M2emufiUkzj/zlVrzScfXmn2kpHe98jDDMNLxQeozv59EIafpZeP6269w2zfspnWEDxl9tFXCnwFmXrcCeRGNMrMmzbZvPH1r2P0nTt3mqMHD5QGuiiv3VdpN+6FOm2SQ9pY9DyzXAzlyQzui4WXkhnwmn7a5afBFXndaFKeGD3pKBfD2xKDEFBcKyrUFgELMPUXgmpSLBrVYfueQ0F3GOB87IYnNOqwix/LdRt2N6MU+NjRgBto0irkd+huiElDby1cZMP1GAuoEXSpa6bjfnVhKMLYHk1+z9/5z+vYQF88f56ZOr7HbN9vZ4PnzZhCfsl2562bb72d8eEvjbEQM+Cys8ue/QfMU8+sZwNx0QnHm1lTJpt3veaV5v2f/SoXe5RmZPtpESQC8vzwmf/4oXly7Xpz+onqzA0qA/7R69ZvMNde/xPyxLD0Qrt43gnRy8OGTZvNUVr02k1G77+++8+CZYAOO8RgRvznv1vOvI+Qi4kEGOeox8p1600PudcspnrA4L2S6sELJzO2IPT1DKN3/IxZCVcgKUeuWBSa+EokGXR9Fxnnl4hxruCIXrBwntnXN2CuWX7EDMw9wYzZ2hsZ57w4des2flmBP/miuXOYGi8w2JUHrjV48ekiPU2YfbyZRL9u2mf9X9//52bihAlm1+7d5u8+8UlzZMx4r9QyORga0MZ5zbOc6LP8FldcOl1Wcer6FN15jeVKomL1GQcxiAcUJoOJGOuSDtIcA8Bndx9ONdDX7zhk4Ns+XMOxXLfhek9KuTtDA832ayF67jNzVi9En0YqfbG+puEyvBXjQWYBQ5MpOpNrHilGjO0hd4se8/M7fm3+yRHAzeXGex/kySjZ+xyG222/+a2ZtmARuWaM4nEQ+2gjbNjSa9763g+aZ8iwhdF/+ateaf7pA1fzDDYM7oeffoZmZA8aLEqV8NlvfMf84OZfmHXPPGPOXXYm4azj2fxDe+MZ5yPk093VPcKsWbPGfPJ395gDu3YIuRk3rsf89Ftf4/Qv7rjTXHfjz8y4qdPNxS98fmScf+36G8xH/v0LvE3hPDLmP/vXHzAnk9GNlwoY6NZvPF7YuXvfPvPad73XrH1mLb1M9Jk/+e9/bP7Xu97BRvoZC+aZX9z3UFS+H/F1ftWfvsXgFwqYxf/GTbeaPnppOUw/hH7SDXQEw37mnOMi4/zeRx837/yrD5vde/aYSZMnm7/5i3exW8zFi+ebbz6+2mylGfgzZk2LZs6vuOr9Zt26dWygw5XmvOedbSZPnWoeXbGSeY/qGW8mzLRfLsaMn2RGkHH+1lf+gTl5vn0x+tg1/2bW08vO9BPHR7ZOqA4lrDUaQJ+FN+o0W1a3q3omucbV0gEeykuDa9pc8cCsPejy7/EEBk3+uPOnzgd8WFGOn45nlpGrpoOD9Kql8QIfv0QcYqQDjqtPC+fOH97uMMdy3dLuWQkvNZBHA+jXdN/mp3VfJ3gJnFAh6DNVYDpKC73wFD58pQEMfW/WDyx5oFNXwI7VkNAPVbKZtLi5PLtrj7njN3ezys5atIAWMNK2gT0VjhMAAEAASURBVDR7vezkRQy78aZbzAiaeR1JBh7cWzBbfSbhIXzp//+aefieu82O9WvNtnVPm6986Qtm3cZNnAdjH+EwuUyABgHG/j/8w9+bh+6+kxcp3nzjT8z+ndvNEcI5pHZCObh3D9VtgPyhD9DOMbvMvh3bot9H//qDZu5xs8mYXmf+51VXM31/31Fz3tKTuQyU//4PfNBsfYaM2JUrzIO//Y35+LVf4bxZUyeb+TNpL3EsSqUyJHznP79vHr7X1mMHLZq85l/+RbLMtHFjWScRoNkIPQt4YTlycD9zgm5Qf2yreP4F50Xc33X1+8zq5b8zW59aQdf7zQf/94ejvHNG4M4bM/14u8MO4js3PmN/m9aZ7evWmJt+fIP50Q0/Mgdp+0q8PI2ZOJFnzTFzjvis6dPIQP99kJo7aX3Bl/7v18loH226ycWmDO3RgL1rjrfrE7n/kv5RYEBBnH5M4+ICa/baMp4pasq9SDQ5LKRwywPG2w4F4YerxDljmPx52WkzUiVdRwcX6bB6yz4jWzBqOOIvWDQ19YAjH7cT08dy3TpR36VMw0cDUb/m9XmhT/KMS3iaJh6E4hhqj4FIZosEX+hFO35a4Mf6VWtKdCN11nkCa+qq7qv1Kx9vvke7ufzeC88zF5LP+b987wZewHky7Y2OcPOtt1l3GDLSEeZNj91UXvuqS83FF11oMGOLHUHgljKBZrgRFhw3k2eqYQxL23no4YfJGD1oRtHMfde48bxQEW4WMPyxF7qEATK4K7RYdNTYcWbclGm8swvy/uJP3mwuvdgalW+44s3klrLfzJhJ+6VTncaS6wbCWpqZ7xs10oyZRFs1krF5iAzUrQSTgHM5+yEr5HLhhh/9mGUdTS8hfVQ2jFoJkLefjOgq9mXPEf7jhz8yN/7qTq6bvnf4IvDsvgMGvv380tnn6kuyQ5bqgpPM6Eqsg1VPPUm+4D2mm9yK4Be+ddPGqPTRRw+bwzTb/4v1A+aqi17I8Ptu/yW9HG2kWfAt5Bq03jxDdb71N/eYjXsP0PNZIR1380+YvOXil3B0F83Q42VgJLkzjZk0Obi4VWjKa5MawLMHo9s9g5EV6dJ49tFmdD/o9we+BMIrhAdYCI7nJQj3mTeYzr1ItEH+tWR4g3FBBhmt6AgmSB12ffHCieZNF8zNPKny0XVxpwTxsxaULp4z3rznJSeYT90Wd3yhKk8e02UuOWWq2bjrUOE9vmdMHBViWRc2f0bSlz5EMNR1C8lUwkoNdIQGVF9XSB6Z5akhivvO2qxAXgBUQ5cH4AZDDEboqzm4gTAiB9yHRZntjchAjKsOflrntSQuuiBmcHMZRYtFf06uIhLOO3URGavWUMSM9y/vuttMX7CY/ZWhx1Hq/py+9FQhq7niMCQcOJQI5Ac9bvpMM4F8tOETjZ1ORpGhjtn86B4RQWXadNM9/0QzlnyjseXiePLZxoz+VX/6Vmb34X/8Z/PkuvVm4gmEs4RkICO+r4u+ciOQsT+JdpuZcOJCUyUD/eCzW82I8fFCVszo+/ccLwwTaWYZrjLwD8c2iRJQBxxE5O/9LvlabsBWr1plbqIvA92okwqo54QZs8nNZJaCUpReJrpPP9MMjB9nDtMiTQljqU7jZ89hNyQY6Ls3bZAsc/TAfnNw9UrTS/BPfPkr5h20yBN+5HOPO45/L3zeMsZ955/+ifnzj15j1u+M3XmQAaPugjPtvfviV/4vuSptMVNPWGB6qP6h3WeigstIbg3IcyyPC9KRnRg9g5Jr2TJNKC+rjwK+/HzpisJ9+gbTuWfQG+RfQxYptibHAqK3mEi5KYhtBl/z+nibKCkKxnS9APcW7JOuAxaU4jj6tFn0i5fNMvNn9JhfPtJrHtu0L/JJx8vAYjqdFIbysgVTmCX4pB3Cg7LHjIq37hIZUO6Ln9yeoBMXHZxkmkaHMt92/nHmWtr7XcJZc3rM8+dN5DqiXoNVNym/vJYaGFYawICAvsy/ZlUCuIKfgscDkOQRLg9PCSBlJscswQ5fUR6CyGpT8V/Jl2ucY2NpcB+vYFqqJFWRtM8mDe7jtSuNWV0Yjrt7q+bGm28xl15ysTlzwXzT43ZmAQz5mGmv0AwsFnviFEwJ/+djnzBrt+4gI388G/XYIWTvtq12USgtQD080M0zglLPLuIBF4up8xbybjFVN176hnxl+gzTNW++/ZF7x0xavPrP73kHF3sL+cN/+YYfm3FLlpqpZ59rxi9cbA5u38Yz4EDAbP7EE08y05//AlMll439mzeasfu2i8i0reB+numPABQZM3GymTww0oybNoMNdC0PvgDAT9wY+2VA04XiwIdPOfzcdcDWlnBtgQsR64O2W9Th6AHMrtuvAIDDOJ+x6BTTTS8PMMjFxkAe3GJwH/p6N5tPfOFL5nPkanTZK15pFi2klxIq5+ylp5jnn7qEDx/62NXvMm/+h9hlB/TYSnG8Kx9fE8ZNnWHG04sT/NTr2TqgL0MxDUj7B5XE0TdIvIab1y+l4tUQ5gPotpSPIowl/Zufm3sGPY2Bz7BeWjda4Vklvy40buRJhTVePZ558+UkUODjiPosgzsrL6u87/9mHRutPs53f7vJnE0Gb8iABi7Ky1MmeEwe80ywDLjWpPH40KtPNh/yhFpP+DDQs+hec97xBj8/7D14NHLNaWfd3nD2DHYDGht48RCZIB/upwR8wXiS3IrSXmQEr7yWGmi7BpzhxIYvCpO0Klj3ewwGjsJDP4mBRfpLGWSkj2zJR1ZVni5biTkkUamzFO6nBd7sFeNOpE81qNfcm5SC4JuMnVxGjRtnbvrFrWygv/j5Z0XYd997HxvnMNLBs4/GO2zFJwFG4q0//7npIjcVBJw0emD3TjNAhvzU+QvNDJrJ1nWv0Cw3FqZigaIfZHtHgQvdxHPONX9/0Tlm/JjRZv2z28y7//bvyCd+vJm8aAm5v9BMO4zV9evMru3WCD9h1iwzgmb+MZ+O+o2gLwSTR7vZdYLhq4B2b0F5WKA5kuxl4GOmHDvCRIEaLozqtPYlcgo+ZqCxzSJcRnTAdopjaOvFESNGsctMRbvMkG77yWjevS+eqMI2jEfJxQWuPnB1mUKz2xJ279rNL8PY0nEkfYnYuW2b+fp115nRAxXepQVG+nvf8WfkEvQWM5v87rH9ZO9OonEBi3Df+O73mr1bN5tNz27nLxrYejH1K4EQltfcGojaBZ5RoaL7HG1cgjj9E9sRKPzcotekPPojVDbGsAgU50sfUJNv+Un/oCkRT4P7eFlp6dN9nPhp83PanI5Vlqw8KtuKCofEP37yKDY2YdClGbIhujwwzEJ/4/Y1kdHq02CnFhjvzQYY+HB1CQXftSaEo2HYDhIvLUXpwOO0E+LFre2sG3z0ca/8rSt1PRAHjvz4/tKXhzKUGhgOGtADSySvMhKl88ZV4sADndBKnr5SJhsf5bVWD6I7ufr6RBpB9GtTKX/dveqGm0lP7OYygYx1/BB+ceddPKvKBjXuG80Or1i5ihcVIv8Nl19mxpKLBg67wQ9j4Fvf/GYze8FC3gecfdOBGAX4QsdGaARGhGbXQ+GdZ51iFk6y/fb/uOp9ZhftHNNDhunYQ+R2spVm68nXun/nDvOb+x5g8uNnzzKv/4OXmH46mKd/w3ozdtdOc+UlL+U8+Fs/QXuu+/rBi4P/giCyoG3WBKc7wP18bEU56YT5ZtqJixK/KfPIhWTxEjOC3Fm6zohfgoQ3ZLrn8SckaT74J1fwC4MAPvA/3iRR89sHH6KZ8hHmzDPOML+98QZz1ZVXso/8AZqh3/tsr9m1cb3ZRC8tEvDVQIdDZKDfceed5o5f32m27dnHbk7HumtLlbalHHHB70W/ypSwPaL11ExcnlG0D24jYkDTVdqM3w65z2um0A6hHdRtFqHEhGEuSsBDijxRvMCHyRVuJ5hFrrdd4nfv7+Uavfmi+U3VbEGK8QnXmpcvm506Sx8q9KVLprC7SlE6cbkRnu2um5RTXksNDBcN6L6uiMwy6MSDTASxbIZxX1lED+3EbfTehGTiu0P3BLPFo8kg30Pd/E9v+YV55cV2ESbih8gVfQK5t2CBIYKU/+GP/LO57cc/oP3TTzX3/PJms2L105w/Z+YMM2fWTN5+8UPXfM6s37GbXDG83cCoTD+wMdNda7ifd9wM8wfz7U4lMK7//j3v5hniEeSe0U0z0RDolvsfNv+54Rlz3c9uNu+hRaSTaIeSv6S9xH9/9VouZgYZ97Pd/utf+s73TJV8uyu1Itix3BeM0lxnyEw/GeuZXOohV0dbgW89ZuTJUDc0i16hWfPqjJmm4l56gFbZSG5Cms7xfpxefn5NO+q8iBbsvvTc55l5c4/n01nH0deDhbNncgnIh77nn7HMfO797zbIg17e8EevNnvITaafvmoM0ELUF57zPMa/m15c1q5Zy1ss4qs/Alyb1j1wD8c/983vmm/fdietCRiyeU+Wo51/YIx30RcJHXAia593IqvOb3Vcnh3wRTuydqWG2hIBqWmeuq3U5kbPpeUQ/4ULWW0JcTkxZoOxFNs3/KodKqNFjQ6fvrTSON4i3iGxWw3DwTzY+3tN7z6zZddBXgCadWiRXz4M2RXkfvHWF51QeBb/gdXbzd1P7WC3FJ8v0pDj0zetNFe9/KRcRjrqAlcV0H3khyvMh/9oSS46fC2447Gt5GrTlXC1aWfdQvUtYaUGOloDjfZroAt22PEQoftQ6EAMnoQ+YvQE+LmY8PXVkA4Sg7vioO4VFoqOJDeWm355a2SgI253eaHZdMEl4xPuLE+setJ89JPXmL9633vNBFrceO6ZpyvGxjy4ao3ZTcY9ZucjWsEgXol60Yx6lfzNq9Qv6wCceWPihZYTyc/9gheco1E4/iDto16lBZn7Dh4yf/j6N5pvf/XLvFDyTNq/XIfP02LIT37xy2bmhb9vumfRIT698Qwz42m5pL6UwbIinZJfUz964akeP9d0LVlqKt6WhQPwfydXnL41q42ZpLYzBH+Sv7Jzl3nzle823/zi57muYpRLPe68517OHzVzjtl36LD5i09/yfz1G19rFs89zpwyb66gRdedu3aZq/76f5tDo8ZxPUTv2v0GLkfdI7G3zbEbqrR41g8VcgOq0ItT/7pn/KzWpFUbSrQd4c7tyRrQ0D26PdvWEPHuBnhpfswDFC6QGxS9YUkqvqb0ycw9hB9T5ov5cjqqQV8kqtWl40pFUQPXsHy1zMaCT/KvPmnfdrMx25u7fMM+s/x7j7N7CWawsQi0Z9SIhMH+5Aa7tyzcTzbTzi13rt6ZMIbTJEQd13/nUQO+vp+9vFyA5+/W7jKQQwLib//qcnP5splMN5fcX8RfHgY5/NRFFvitp4VW1+29pKcylBooNVBqQDQg44aMD5JGPmA6LTQNXTFoYjBPGTxDPGGgYYHgz391h/nHf/4ooyA+cvpx0RaHAMI9Bf7oo+n3iU99xvzijrvMX73/fWbSpEmUizL7zTdvuNHcsfxhM5a27MM2iQjX/eRG81+3326e3Rv33YDz7PJJtGsMuWZseOpR84nPfp5dN/p37GC/8rvXrzY7H7rfHMAiUPoHf/nRNCPdRYY/65EMk4fXkoFOxhZmrB9f9YR58csvNVe/52pz/gtpkSjlP7Nhg/nJjTea68lHe/zM49gHvJtmVDeuXWk+TnVA2LBlK812x+uBAPvXz33BHKEZ6UfolNPUQPqo0MvNhj3bzcc//0VefPro7n12xpyMc2wXObB3rxkgQxk/2sPRsqJZ7rvJTeXgZ3bSOLnH9K18xlRpgSp2rNlJ/vuXvu6PuQ6/96ILzCSc8klfD+749a/Nv33qU+yOMo7q2k+7y9x/333mVT+/2Zy6eLF53aUvN0sWLzLwbcdXi5/SHuhfvfZa00ez+dNPXFxThS9873qW78HVbTJQa0o8BgH0haQqrjJ03/p7aaMNucc5qyvPvVxzkjWFVuNa0yA3fgYDtJU/uPTSXPUJvFME2GWD3vn2t5tvfOtbNUiHsZ8pLZqBIBBUBBKhRQmVl/xNDW0JKDVQaqDUQCdqYMRdH6817rTBp2dylBHYP2OuOdAzhWzDqAe01ZOOESmFzz0mcPs1AvWlWZ12gr4TtTf4MkXjDOlS4o1IsWvzBrOVZsa3rn6SybG14nTaIWUiZptVwIFCOJjo2TUreVEofK5hsOO+wzCEi0fP1Glm0px5vIf57i0biedT5Be9zkw8bi5t2bjITKJrdf6Jpnqc5Y0tA7f8+naz9YlHaevHsWY67V4yiRZabn96pdn65GNM201+59inGwa6+LGPpBeA8bRlI/Y8P0AHHm1d+YTZQ/XAjPpoMpwx23+IFq4eJp9rLASddtLJZgotLh219AzTu/xe00vuOQjTabZ72oKTjczXbyVDH7rYRzynQQ8kcw8touRAPOEyAcOsQu40R4j/lvvuNr33/sYcpsOPZpz1fN59ZQy98Bi1n7oltn/3b9tqep983OwkPfbQlpKo7wTa3WZP7yazjcrdvvZpQqQXEnzZoDpC/sN77SLPSbS15FSSqYsM8R1r6QXmmTXmCBnruAf4YlElHR2lF579G9aZfjohddIc0jn5w2N7S3Fj2b1lk8F9wb3krR9nzeYXNC0jx4+B560y+zhTJfcWzJj7oW/1KjOg9pf38zPT9HLWddbZia8k/dueNf0raifnBtDPBcIALeqtCREoiljbMuIh/aXLp3s0ejN9kdmX3CYbfLtIxtGBBdlvvuIK87kvfKGm6KIA+kgWDLWaDqK1BpjV6YmqdEmAxarVOWW81ECpgVIDHa6B0KCsYToeqkqUL71jPJDUoEe4NTklQGkgbQyKX4bw7iP6VoQFopgZ7yGj89A+6w6AOGB+wGJCbEeIrQh3rH+G8PdEp3LC5xU02ONctlDEYka4UcCwxrUKw/nMs0yFfNsHiEc/HbhjyLDBQlRsd4jDhbppe0QceoQ64YCg0RMmsVGOA4MO7Ii3TOyfeJRnlMfSCwF+k4kfDNv9NOOO7R4RIAu2gZxALxo46n4U8Ta0qBSno45euIhxRmLx5mlnmSrthgKXhyp8yKkefbQodiTRdpEuqoRbgU850SUCydRNZYwePdZ0IY4Zc6oPESfQUBfcL75PZDjhRQT1ggEOHfGOOpSeePwJXPe9W7eYA7TAdT/JCjq8CMHIRj50idNTYcCPnjyZ64PDlfpJN/0bSH6SsZtkZXza6cbek/jNFwY8jHPsuIOdZaDrYIBR2GS7CvIdDCC1J/iZVyZO4i8F/Vt76cWKJhDUYuSuBQv5YKqB3t7CElVpn33fhalKbbAfBjHWATiOYgvKVeCFC2whQbN9RT1R8i8SrccpRz4UK8qN0Knh4qHhHwGhdB/HT0e0ZaTUQKmBUgMdqgH0aY2EXFQ5eHseyo2I0hSNDKBSH0k3xbRJ4qx7kpVXpNgRtA0g9sPGDDgCtt0DzA+YvR49no6NJzses9IHyDCUhaBdvOB0AhvwbBQS7kgyRMfDfQMGOM1Ejz3reWzk9pPxycY5GYfYQQWz4DAUedEqjHia8Rw7eQrvHAO5QgFG7hgywHDQEYz6ibMrfN1HO5lg1hl7kXeRjJh57yEZUCfg9pEBPYbcZSaffCqzHYuDk8hww2xrhVxRxsxfYMyMGaaH6MfNnWdG0Z7kXWTIIsRuK7SdJFxX6KvBKPIfn0j8+6mcsTjsh8pMBBjnTGyv0BsOBYIsMLzhnoN8HJhUocOMsIhzDBnrB2nWHHvPw4UH7j09tD88DjACPm/xTPdqBBn4B3Zs45ck3AdsIQkXoJHzTjTjaPZ8NLkLjcSCWhWwtmACuftAd6ITlZ2M5nhmkwRDn+JZc9q1BbPmA/RVg9sZPB5oVx8JFZpVx1eQrkUnmz7Sd9GZdN84j/iS7rFIV/oPwPUzquF53300jZQjV7Y9cY8C9wnl6rKFBvxCcMnPe02Ta3Bn0EVaKMDTKAT0O/AQTFiU11IDpQZKDTxnNZDoP6nnDAwqfn86VLoabDkSM6xDUGkY1zBkMcuNABcKwEIB+2WPJYOaZ9PpNMujZJDA/5wNThiHZDjLzi8jaGa5Z+440zPneNNNs71dZCz2PU2uBfDJdgG4fMw8DFVavNZNxjzcMdgYpZls/9AfoYNhD2MX8oBuFBnRcPMAryMkF05ERT14ISQZ8LLtI5dHBvUomlFH6CLfb3aBIB7VpaeZsXTQ0MiDtKCTZsS7yAiuUv361q5hw8vQzLMO4AV/exjN2IYSLwSyL3zaTCXqh7qNohcduCFUKS3tjWfK6YUBeUdo68r+o30kNxni5OIDH3XoGLhcX9IN6jaWDM0jtAAVBjrcbiHTSDJAR9MLUZVm2vseXK5FZncW6AwvROAHHfq2TYJguCRIj3rWvG/DOjNAW3GGwgC+3NB9rZJ7T9eJC0wf9U25jXS6Z/QpJsSW7teRArqEtTj4Qdpau0rOPYNebYUkdOOw2MQ2YFKoG1Ro51RDxxQl3pSkwtpIb4UIwre8lhooNVBqoJ0aCPdo9UsEXf3hJomRTNkyQrD6pXc2hryX6DkeeTeJ8qA9GizyaLH52mJUEk3HIxRmfmtmf1MKg2HZBTcR3+XDwx9Bxs8oms1EGMCs+aqVvJBOSgccs3k49XME/XQYOcYu/tSwenEYnt0j7QnWabhcHtUV7g9+6Cf3mCrNuo7ASwctEiUrNkLRMgswTXbc17R7WamiXjTPWPuBgtliC0n8MIteL+CLBw4ywi8RDtPMOxnsVdRx/ommf83TUfYI0hF+CNL+osxhGrG+5rWz5qF7JlUc2LyJbDhyg4KRvgDuLuRWVc/dBS8BS06pcW8Rnt0n0faN8EMnN5c4pEmRBo+fSfDIuke237V/4/JsDE5NoTaIUmG/NhtCLvTgmX8GvXkZ3JstP22uPohTtcG7Bfwd0/JSaqDUQKmBoddAo31aHro8OEOvgYYlkGFVqok0xx2A83UcJQlyqFRy8WC/WWe49q96yhv4Q0R1YNFoL9LWwW80mwyZKgwZMuDhFsJuBmrWvFG2raLrp4WSVdoiUvskYxvEgXVrW1ME3Vfc2jZrOVNWHOJUOZV83Gkx7gC5Ig3QFo9aHm56/CeTTedk0kshFujyD+4r2DmFtqzsIqMYC3a5nWXMmocqwkY6vazA3aWKmXRaWGvIPSoUeNchtGmUjTb99Gra396t06D1D3jhw6/rrGW8WBQ651BEx6FGA1iIB14W4I51kHao2x9/kUrIHqDjLzsBeIKuiQR98MnLXTfHJkr0SaNOzs8o06UGSg2UGnhuagC9bWbPnOg36ZMyz3IkdZVJn0QdspSMKpBV4loYDdNxjVMvXqFZzyr5ROtQPXmJ6X/oQQ2qH0/ovD56KzDYl1t8gJWveSt41+Oh9S1tScMiepod71v5lOki1xuEARzyQzOqdQP0GWi3TOfpOlhu3QJaiAD3FjIiMatbxczuffcmtgEccvkKVrXrtNMTi3Rxf6tT7e468DXvc24rBdkadnch4x9fGzA7LrPf/Zs28EsN+KFNwxUGAS9y0CtcZLCNZhToBagyndYWkO8/ZMWC48x91r32Inzy3BecjMr9A70sFA15+OfhmWaH02qOPOQYLHIi1mGHz1g1gWBBuIfYKmV4bMtkqYFSA6UGWq6BPH1aqFDQcS9Z01cG+k7HIJhTQx8qrUWwNGOrDryiBtZgHVogXpdnnIMlz0bTvthmt91yD7DQ+AKZIvhg6FP0gVlzmc3E7Ob6dB9gyN6OELofIRiXvZ+M8qfoq4QLqXiCQFcs89QnkUZ6Zpw8HBSzwYju2Wv6N9HXAjqsp2vJqabv0YcHo9SWl8Gz1ynuVH2unTWj/YH16+0MOA6XcgdMYdce+KVXaHGuLArtJxcYvMhVyB0mGHq3mn5qV5iN78JLKq0R4C9fAfzQBAU6Ud2/+GWwHrA7DRajumesQrP+oX6b++TQ80/PawjfL6teOtn2Y+zirwwxbRkrNVBqoNRAqYEO0ECog88anDKdMQvUR5eL8nQ6YiNGZwRwkTS4j1c0TTN4hhY5sksLfW4PykQ8GV5HhjTaoiIVwU/MmtPBOrJzRhEewwEXRuBQ6LcZ3fCXAXIBgRuIoRe/3Ishmym0DbRpek9bCFpEBLjN1PCn2emKWz/RR1tw8i4wAUPbLwez6n2PPUovq7Q1J83wV8eNs37pvutMnec4wRcvv2T0yxcD3nOdXiqKHoyU4NmmRO5Fos28UUWyQ4mBt5DUt5OIsIwMtQZetXSqedlpM6LTTnHS6S8f6TVZp4oOtcxl+aUGhlIDRftMDGoJmmjQ8YY7gutZmxq6QKUFR66CImlcdRA5fLjG8eNFcH3aptNklFuf2inxiYTEFDLBx1X7R6OsAewg0kF+3JAJu1kM9aw5yzGIf6SdDWKRuYpK2zUGxPCX7iIXqW4y8o7QQlhx48jFuAOQ2J+b2r+/Dz1mtFsRcE9D93WAXjYbcp0hQ77/iRWmSi5U1Zl0SBT5pR996knaVUbJG7ArYyFiaarHzzUV4sO+72Tk99N2kQNyKi/xSLNF0+CwZ3Vf3Ar9aR7PqRn0a15PPlF1Qnm0fK2CYJxfecnCRMbiOeMjY7000hOqKROlBlgDIYNVhopQHojS4L5KfTykwduHazrJk6vk+WnAQzDB75grGbQVWvxZpX222WXFCQbZeZEiDrohX1bsIFKZRftz0w4TEvof6TD3BDr4hY1zLJo7hmfNRf/D+kr+0jDsuubNN93kZ30UbSnHbHAn1Rkydz/vHLslJgnWj4Ol1N7mzcjKu/fMjp814dUH/tjRp8HAxjS9WOA0025yTemnrxjsv55D9+zOgll4crnBVqPWlUcMfOmVGxAsmkRpgDYHSf4Z9Bb12M67MiEaYCF4AqnJxIsXTowMyiZZPefI//B5tQ+bKAF5pYEu2iivpQZiDWT1adlDAnJDGArm9ccygaQw2t6nxjUdnBjPapIfKhvkcDMgv9ZEwM4h2F0DM+POEIj0sXkz+btuNtVTTzUVbAtIe2cnZuASjFqZ8G6Uz5pm/tkwdwv0+ulTe+xmEEnvUw2jNOqPetTRQyfViERNzIqGRN++wwzQaa2VSbQYkg5gwg4owyrQbkYVOlQIoQ+LpclozeqvCtXt8BHTv3atqdILjATMzlcOHKRkk216Fx04tXIlG+lV2uMeL+Z9Kx6j3VfChv8APes4qTR2ZyH3mo0bXH1FOntlBw/WQkjGsI0qNElODaRCRRKb/DPoKQyKiJK6JQ14t4B/EVlK3PwaOH7a2FTkrLxUojKj1MBzQQON9mlMx1ZCbi2FbIjsk0RDFLmLawuiSITqS5wLwiw5jhaHX7lbdAY4cLAfOBvkMMpzzKSxkU4zcJW5c2kBGx1qgxl235+VCy3wh0dpd7OLzKjpWXN6ucBWftgBZViPhVJ/eWPkG5m4mwUUO7iokJLbHv1JtEF3ayGNipo+2kayazy9MNKi0QFydYm2AhxcsRsqDS+5eIL4FFrsT68r1hDHmIh1t2O76acDrnAAFmasW9auwRwHZ9E2qdU5c+wJpmcuM31bek0XbYEpoY92fUGdsDsLXkQG9tPzhRl87BQjbVOQ5Qre8hOYXNPg6IWQ16bQnf+tqfmHrHkOjWvhuInh06oa5/jcoTxwqM+MGWWPrfZrjbwylBooNVBqwNeA7u/1GCZwgUla6AecP7mhXVZkn+Yoj/zJ+Vh4Msx5sM1hlAstrlUs7qMAQx+L1gZoV4n+h5bnMu6jhbUywDdqmPuz5jjkJc+2hCx5B/5JGOXubgqsA8VNE0nao39NwzfUFtkfHVsvkquLv/ViKl0rMuDepQ6j4jUVBZ6FyoyZLAVecLNf5JsQFl+0HLnotAluSVLonraChCsbb8WojHMgYtcXGM79tDtL0p1FsxHpNKxYPGutQhFOaXb4oG6ziJuU+HTkapDqgF+khnVwv3t/r7n58W3mklOmmkvJLWPK+NJgr6OyKHvFhl1m2YLwiXLIK0OpgVIDtRoI9XW1WLWQPHS5BjwxJGuLaBwihleItzZYqYS0XWR82TkNg0PtvKIFHKCDS8QoT+yVrJFyxLGvMp8GqXDZUCffVCxCw3Atsum4oOut3IAXpUO6ECL/iq8B8IWFrznPmq+1PvI+3jBKR3qAzEV0MVR19NuwpBuQB+2Rfa6nTjPVRSdHX2Pg0930l5k0eegFr+u0MxJfk9iH/Ak6dTNH4K0OR9CsMhmv/AUpB02nosAdrL+LzNiZyXMOIC/6jT56rk1ff9wu69zrNFu0KLyovtJeFfK7uBQtMYDfqreNAOtcoB0H+gwM9XGju81rzrOHKuQifI4jff/eTWbJnIk1s+iYPUdeGUoNlBoYXA1EHTp2/jh1qanC9YOAmEmLDuDJGoxS8kKGKWom8KjcFPpoljmkDvIf71p6WrQwjWUl31RZ5KlJeJEnua3gEzwfE68zG4z7O7lEbGiAl7EpMjapflFdI8Q4kpUXY6kYvgrQrB5OokTAjDlOXhwuQe6/L29hPfgMBjut262ONyEHXCdw6iX7Obu1BDCC+5bfn+/LTMGyq3TipXb1AjnKHqAX0IEcO7FY9xZ6pvFsHcNhAOtQ6CUkfu3OrmwntuX8i0Rb8WZMPCrVao2WAJOZi5pMAFr0IAV5l8C6Gli+YZ/54HceNS9dMsUsnWs/ET+6bpe5dcV2s3o7Fn6UodRAqQFfA35fJ0ZgvRlyzkdfST/QxPhxLynwituZQGYucVw2YAOrVuYdlxJixyUkwFH/nJafxA6k4NaxiGaOaeZOAmTtkuO9CYgTDCOfcr3IsxVjD/jTy4voSWTgK9xdyMBK+BC3qEzwT+wggVk9nJzIvuYNazMh/mAk8n4NGQxZipahXy6iF7CiTLLw8fXHO4USBnR1wUJa0Bgf3pTFokieb5wLLR+4U6/dQlZq6wj9z24NPw/CsBOvgfr1k797dfrM2q1UqX6274yfMzbCa3jYfPytVDNs1IDtym0rAC+suhQbd1Bn0AsLXRJ0jAZgiK++ayPJg18ZSg2UGqinATHIfbw0uODxIEIdNl8JmMAnQ9eMJ99s7GICH20+EVAwLYcq+ZfC79Ic7qCXZ9pxxd93Werb98wadmHJs8hTaBq6kjtC37Znk/ukky9rBV8haGa/n046HMDisgK+vJly0L3iWXN3kmlf7xaaNd9MllHnr9tJtLnMSg6PzOQT0lqZsRAyFLSPeCi/UdjAoYP0wmwnyjQPHFmPvfR5wSoWPwcCH2lPcLh/tOrLVKCYwQXRy3zfU0+aLpy8C9cxmjXvR5+ye1fUh7ZNoBTDulXldZuc1n/8DtJc0fFsUMwHsBA8xihjpQZKDZQaGF4aaLRP475Wz/LIYkn4aMMgDwwKbFApK6S67HnGPEsGIQz1QzQYD3UgN5JQwCFCg+kHCwO8nwbuyhi7M1U/HXZSGTOGD0HBLhADOAURhnqz7id0z6oL3b7LZAzxgjbsINFhQQzxRttqh1VnSMTBLiWhwIa0fo5DSEVh5CaGhdN+gMGN7UPxcm7ox/7l1Lb5pFM8/5g5p/UPsjgU7f6YCgcPmr5HHkpWCXal11eqLjKJ61JptmgaHF/kWvHspH3ZCfeaQdFLYKmBUgOlBkoNtF0D2KcbJ97BIOddR2RYsdMk0SE8ZPDx9oNuZxKRS07OlMG6HzO3Q2ioV+iAIBytHQrxnt+h3PbA7ILTeHE7HydOrgg4yKhKvsMVkhWGev+apxta6FeZfyJv7wbpYQjxDi0pRlx7apiPqxjnwNbxfNQlVqQBclfihaKe4dzyffbxpYdOMJUFxry9KO4ddkvBNqMjR3L75TZMM8kV+nKDXYoMXkg92bAeQ3qVqB5lpLAG2v3c5PZBb8XdRGUqlVofdPL8IcW0ao6+sI6DBAumjDZ/eOYMM39GT+KAo/XP7jePrdttfvxgb0f7X08e08U71iyY2WOmTxht5tJe5tgqEQs711EdENb07jP7Dh01v1u7y8DPfKgCDpFadsLEhK5FTvi6X/fAFoMFvkXDWXN6zPPnTWS/+WkTRkY79whv1H8V/YoetNQO3baDZ1F9lfit1kBjfdrANNoRAp+rXRigGTAYkQN0SAdvLcgLn2xm/x6crEfG/KTJDIChMEDbj1Wwb/hsOsgDg7qbVRt0Q50+/VdPPoVfMviz84YNHK/S4S4IvPPEJr1QUvTlmw6A+zBm0bo/R+k48fXrWSY21HEAzZlnmX7MuG8kt748BjYWwS46ib9y4J512qw5JhMxoRtPKoq+W6fGoePU5vZRp2I4mGdgJ21ZSF9mKuPGmcr48dz2++77Xb62U4c/ZsC7TqUF1uTbjrbV9xT5tvtt8hCdcIo2TM8Unn+0Y/aN94xzFFWZNt2YxLNXT4AOz6eNWmoC2nrQtvTbvaTRhhCXtOaYBgdOCF/T1o/juQyFyqtf97pcLTtkVocYZsHe8Md/bH70k5/UoBwmH6L+/pCGLaq8pRx8wV/W0DYCeNv5x6Xu4nLF5+8zbzlvjrl42ay6rH9w93pzLftl16JmlSHYIfprXn9K4oVAcPX10k/eo5M1cZT98mWza3ZdqUFUABitH/nhioSh3mgd6tF97IYnzK9W7TKvWjrVvP784yPDWYmTiG7fc8j8609XJmRLIHgJGOZvfdEJdfUoZOD/5VvXsEwCS7u2Sreafzt4av5lfGg0MO6+TzVU8JElZ5p9s040hhY18raC8Bfl4Hrx2MJycNeFez15pULDkwzUNMBLYEMdvtY00Dca7GRLclQRGPfXcPEg47yK7dzo6Po+emmQ0z0bLXNQ6eirRPWEE3jhGbsL0Gy6zIhihrxCxjgH7MdMedi1Q16qsNAVhw7VGFCDWgGvsJo24+UPg6TXvCOJ0QrT8iKkwYzQi2kXFm+PHcsLk/seebi5tgB+p50evfj1YeGpW0Rdr1p4/rvmzQ+iHX2AdpkZbiHFkh0YSPZFXK0IFEXsl6KIh7SaOH/illWmsqd2d5squYKPxk5ZXnj1H/6h+dZ3vuNBiyfTrF9ycYmFy2YrlcnGGu65n77itLoGo9QRWzX2jOo2n7qNOuMWhbEpBwLlYY9Z2I++7hTTyOmemF2fQNtP6jB/RvoJohrPj8+YGBsDfh7SL1o8xbzm+cflNqCxZ/2VLzvRvPPrj4TYJWBvOHuGefNF8xOwegnw/9CrTzbH3b6Gt+EM4bdatyijHTxDspew4aWByg4y8A7TLHg0kDQuP/y7++inDXWeUSeDsuiMukyUiFzaIE/AyICVxWh97M9NCyOHW8AWj489RoY37Z2OmUjsjEM6w8IzqZtUqQpXJCxOg7EOwxzuBkMdxCBHG5L4UMvUYPmwPLKslI6zTGhmGy+kbKTTmpEqLV7sz7lHeY2KtHFOX86KGOfghed/AO1XvaAzvImX8xoZnwMA6d/8qkqf6MOLp8MtnFxc8rGqsxFiLiYoqhrArNYRYjAfwKIHGGGm/YFndtXMvjZq3DZiXItK//a/LW7IOBd6/9ozKt4Szc/LSsOlJitccAp9XisYoBfMuGe5ozRinGsxYNiv2LIvOFPfat2i3Hbw1PUp40OrgXr9GqQTI1dLCrq0AUHw8nTbCR47dpCfrDXU4RNegb+q5/pSoUE7zRhiuOqnNW+J89Zy8JElo0RcPOCSk0dWqVdHXeFCQLuuQG/VE+bZU0ide442etk4p1nzATLOK77bwSBVSMZI6Jrj6l6xX8sgydGOYnihH56J4fSiAb90GOkLFtr90fGCh61PiwQyzrG7ED9P2JmEZs4rOWfOdTHYpx1ySOBnk7b6HLbPpVQkx9U3oOvVGflpNmoIjr4vTz9fT1R5fn285JSpn9vitK+sFrMfMnaYDYbLhg5bdx1mf2/MTOcNmFGFj3sjRjqM08VzxtcUBX4/vm+TuXP1Tvbjhm/9qbN7zJWXxA9sDZEDbN19MPJdT8MJweHbLT7vofxGYectmpxqoMOtJWvmXPzOUXZITyITXGOWfy95Ils7dNsOnlKH8toZGsjb34mRLvh8hTECI4uNEh2nuhEMq/4xmKR17NBAyKDhGTUY6pMnGzbUPR91Q64vGMCLBj6dkBZXsrFKvrgwTjrKxSNPhUTngsu6pwTpo5+2cTPkW9y1aLHkJq79OCBGrQ1IZLY4kXXPs/JaLMbgspN7MbilNlcavsKsXWOq5GKCl+F+SoubVF3GAeO84W0RsX6FnklDPHnBMvbgH6IXybr1bhBB+s4GyRsna3O77O7CIJAj5MPKZoTOQ2ZbNCZgIbjGGcw4fJL/69Gt5kmaTUVYTAsts3y6YfDB8NWH9sDtBT/AP/M/zsglPhZCihvH/3rFiabITPNpJ0wIlvGxn6xMyMX7mdOe5i87LWzQayb/9LOnKfm0KTozLXXPQ4cXiHtXbo90ffHp082yBVO0GFE8a2YehnVa8H398SJ05UUnBPWLewljXy+abYdu28Ezrf4lfGg0ULRPE3zukqnDpWOK8McFxKMEwdCbSraNM0D/0egaTvEBOtwDP7i+2Bn1BheT0qBfmU8uLdjaDS4eG9aREUIHoCBklG8ROuCvGOV8dTLLoOvLjzUBZGRVZBbdiQ8fdawXGKz6+mJ1gBbbIkJKq25LWe1iys8ZXoLpqxV2Muqn9SQDu2mxd1agZ4pP3MWXKDxTq8jn/CAZ1Y3eeNp3f+BZ2nIRRjmMcwTwito5JSTOmcPvj/SdCcnT9JUCl4mSEC/AQnCUlwZPyFInkTaNO6gz6HVk7IjsbwT8kDE7jp1OPvxHS1IXXuKUTXuQT7Ia2mhP5mSnencVm8VaMqf24AKUkFY+ZrmzZpK1dN+9vzdzdlrj6ngWHQzzb925rubLA3T9xbecFvyKkPZlAQZ1Wl0eWL29ZiEvXoQ+f/sz5mx6EQh94bhw8dSEgd4O3baDp9Z9GR/mGqABM21vXNQsZYxJVjpr0HV5A9to1xf6YRu20Iy6bM+IbR9lESQKgaGKxZG87Rt2lti/n2bN18QGQFKSzk5pPel4QGrUsTqSDkShBYAI1l1gVQCzBOXRwJDNfOYRrkU4OAALbirRzi73Z+zsoo1zevHrW0lfbsSobkIeLNRODXXafCrdMMxItrfmXwGT/FqvkPzbLLaq7MQskGMKWAjeqjIL8IFRGQqYUb3pgU2pu7806nMeKqsRWMjQBB/sEBLaaQbbRGKLRR12H0ymdV6r45g1992CpAzkpRnjgqOv2EoxLdz91I5gFoz0FRt2BWfrsbWmDu3QbTt4apnLeAdooNE+LUd/6A8tQYO9QPlZM+o4mbBmH2Xa5QTbECJgr28+2AczdAXKbNkdEgNDykYacYG3rCBiRHXsh9FEhxtxOAbdBVqpLs1L2qy0VU7LPdOIx2C8b81q+zKLw4Rwau1DD9bWkoxz5Bky5vujmXM6DbiIjnTbF7p2PAe10nckRNpcfuFSbFHoUvSpmaXBNU6OuDwTPmruGfQ0Bj7DeukQH8BC8Hq8Bjv/1hXbUw30RhdUtrsO2GnmnJOmsBsJ5JcZdXZ1Sdkist0ytZr/0rnpBnrWotI1vfuDBjr2TM8T2qHbdvDMU5cSp/UaaLRPy0OXB6eRGkU+6sr1xTfOha/dtWTt4O1aIoYGBkVtiEQCqeFYcCWvlVe8iJBfbxmKacBvs366GLdhhk1tZoAWZvK5AGSAG/oixV+npBrOOOcFoWScD2BBaNrMuW7bYjRqmMTlKmUcw1f15CdqWbSNAT9EkwZHPxTCTwiRI5Emf3fWZ1TNtxVCMD9pUAnmxD0E1zgdEIdRi8WGodnPNBeLwRL7yQ17Ut08MBuNH4w/+Nc/vn63WU3+9Tc/vq2hA4AGq055y8kyqG9837l52UR4/k4+7dBtO3hGFSgjnaGBRvu0PHR5cDKXkGarKGSo+xQ8a06uLg0H34BAnXxYiLngyDWEU8I6QgMwPGA7yBVCpRkjyDumAxncvP0iFo3SrkB9+2mNGx2QhVA98cRotxbeSjHNOAdy6NkPwYB7rIW0euZtVKCv4YEW6tplMJ8yi8KZY/4/aeJ3h7aOCbG1VQjlFICldKgt4V1AjGZQcQrnUBvjIflx4mYeuWB8YvEpfq994Vx222n0pM6QHEMB8w3qVsvQDt22g2er613ya04DzfRrdWkTfSl17zWDDoGaE99SYx9lGOGnLuVDexIssWAyAYgTsuAKEInX9ddM1CnmVcaGrwakfcgVNdHx4VuzBiUnd7F+2g2oOnWa6VpyaoIJn7ZL7lNpM+dpRlyCSZnI1ECjOkxrs9y3ZZaYLzPNDq9iBj3Pj97xqKTmfrb/bYZHvso+F7FgZGN2v0jAlwDMquNwI+w2U4awBtqh23bwDEtfQodOA830dRgSivxCtSxCH+Oin9Y/09dvBp54gg11nGzKC0SfWEGnGR6J8CCr7d+TVx9WrE6xTCVdqYtjpg2kuEfxi/AB8jlPfe5rn3G72Soo0D7i4KfjnGM1lvf5qFf/gn02W/wFaQJ2dJoNTgeY5jO7K4TY7A9tqBke9VT7XM7HoseP/HBFYSMdOoP7y4deddJzWX2ZdW+HbtvBM7MSZeaga6BIX0ebllPnSP6Mrp/lD655x5zk2KzqidHD/mhPGI7jKnGdl4B75XIebQ/X//QqXiCJ68CB/ZaPw2WeFJdrqo3h8S7x6LaUOnlu6cA71VMe2MooWvuU1RYEEU3GfTHj543SchUUPy3wY/aapjfSjPRzuKahAY4g/W/eKxjmxc3CS7PDaZEosvIEVLQMY1MOHio6e90OTWKnmbd/dXnqHt9ZZcJIT9vxJYuuE/LgV5/m5vKxG55oiYjt0G07eLaksiWTlmggt2uHKg00A/30o+4WBw3ZXtfrewnOAzSQOACZRgpJxlAXi7CidEQaQWpxvKwyWWqA2mWykaEd+rBSTXU0cDC8hTK27MSznyeUOve0lKY2D+4lPSZDmQzb4d157fNWfTKRNz+tCsBCcI3TKXEYsqEA3/ROCJiZxQFDk2mf70tOmWoW0CFL86b35Nq20O6GsrETqlFIhmd3H0410NfvOBTtXFOIaQC5HbptB8+A6CVoCDQgfZpc84qg8WVmJ0jrZtGCeSWw1EAbNKDbprAPwSSvvAY0gEPCZsz4f+ydB6AdRfX/57730kNCKCGQEJIQQhUpgkgXaQI/ihUUpAgiIKJYAPmpqKBgR7GLfwELKtWfSrFhoUlV6SWEkAIJCSGkl/f+38/snn1z9+3et/e9+0qSnWTfzJw5c+bMmb2z3509O5vspQ8H/udtL75YhYNCEJ62cViW0UJJMgv4ObJ9Fs36urKxAt6xc9rWlOfRrYy4O6GtXcUqMYW3Wayq1cXMmn5S7btl/nZ+i5ev7KJVeqYawC+9pzv67z1lg8wvaKLF5jk3Hz2jYeOkzl24LPcF2d0njGgYQDeNe8K2PSHT9C3jtdACVSuZurSUYH0tHOSyS2urBVp5h0PfEqgMiT94pW8JsMd+GACFacyUzof8ZTrDAlXzZEZ5N0k9PR7lh4rqGCDAbV5gT+2+CgDv847a2m+hyGoy4d6n53UA6HwYiONUfaWUl0PTIWv7yDRPf8yzZSS70mSFN261YQc7ZPHl0XrCtj0hM0//kt6HFugqaLZ6FiddyFlmScpTiQ71U+VltrRADwOY0sA1LKBdkPyLoTVYPEhXeeKasa7/pvP6nxgoZUzPn5o3O8jorFwyqdOhXjwuGfSUFp1mUxok/NmOL0lxewIB3T38I4RuyGnXpudS+GFnBT4nnwcC4b//+fr3A+YDQlkBHQ7dedOsopo0/LDZapEDYJoXsr4sCm9/8KPP07kWnf3c8wK2OOfN4/OKE/qoIc3u2F1GO8BzVugJ2/aEzCzdS1rfWKA786XXGPCUdxTpUl7dkp5v13XNNkXOo5Kn5y1g513YEjQF3DLKoxMbYKeMA/sVDthZzH1x5OnYknVXkMfcbTonXNbdRs7dSbfb64IAVpb3235j97dH57qntDJLmCI/7lqAmZcUeeEvL8yQf3qW77q9mBm2Q9t5Lzzmyc+i13JXydtS8YmZ9d9kZLXd2zTcQ+58fG7uDdTBO49xE0YPc39+ZI57bPbixOUFMM7YThg9NPmiKHJ4ylAr9IRte0JmrT6UZb1ggay5rkizXCFYM6tZP7p4R+JyeL2cjg2uXrXSLXl5rlu+eJFboYPQKh9YS3esUVLWNAvY2WGnQJi39JrWp7Va3xiMJ7/5MG/ptdoAHTs3eOT6CXGI0oP0BdZhG41OaJ0mOPlr2i71S4C/FhbNmI+9hAx6p7oVZGixH3Bn/IWX2msIoq0sOdBSpqqSUqusirFgBkBWKwCQs1xA8uoA5msFfKSzADp16mnH2vjB+3ZwS7TneZYbi/HgrsJKPCv74c0DoPS9e21ubFXxI9MXVuVZeQbY1vpSJ/rzcik++Lf/NwK3tAutaL2f/H1GApqrFMjIXHPa6x1uPNPmLHaX/3V6wnHtvbPdLpM2yPzKK0z2ZCGpkJNAxqgh02t+YbURtk033xMy022U+d61QNZcV0QD6vlrRRFm4+FClJoo09eNlcuWupenPu2WzH+5A6+JKeO1wwLp63qYD9NrR2/Xsl7UBJVrWV9rdGf5qwuSUks3tbS4UeMnuuGbjHHNLQOS8jwgXu+5ztybNW/n0ZGfxd+uWLFUaupOKhVfQc+TkIjqPBGJyDIZtCx65zK7wjFsUDCwXREQ1GF1PM9lxNgAvjsL+DUqhGA//SJo2AbguegNAP1Iy2LluUgA/BLww2f1GXButFr1jWecgP3U+XygofPAzZO5hoQAnfrX3f2CO2H/CZ0LqcEBUGb3m7Qt0lW6a9u0PPI9ITOrnZLWWxbo6pzWlfkwq632SfvlqU+5V2fN6K2Ol+2UFigtUMsC/DTtJ+vTyhD7n6wVZORryVwHylr1Iu28557xc9km2+7gBg2PsEe7MdNG8AZNEzvJB/ZPOKF1pEcviXakJ9WKJnJENDVLQJHDVv67FdNFKdLVo2hfO+PLcye48Z4Zdflh47P9vT8/11lzHuzhBlNPuP2hFx369EYAnJ//m8d7o6kebQNQfc0d07rdBltTNir0hG17Qmaj+lvKabdAl+c5P1nXe2GBv/poa9XGEHJneeGhf3UE57SRc1Fo70GZKi1QWqBHLBD+9ixtv8kyjuam0A62hB3TVq1Y5mb++3732kuztXc8I1Q997Xn6xu9uudsia+7jvqQrpOHwdXt0Ao9m44uOd1poz5jZ3HzMiCrpFnhL0/M91/jBAB1FuDhy52h+0itOl/7wzOFwP9TM19zfFyH1eEXtdtKkcBe3w9NnV+EtQMPNwKAc/y414YASL/wV4867FhvwIbfu+1Zv4+81e0J2/aETNO3jPuTBboz11E3JzC7+2DyuXop7elGi+I5Tz1e+pbH1iqj0gKlBdYuC8x95gm3fBHv0VTPe+1zYTw32mpEMndGaLSjNVJy0nJT+e5j2trtVY4/6aQ8TTvq3k3KoYcc4v729793kLJy5UptAZoPEG2vyfmvO6ND3Z4iHLH9hm6PrUb5j/zYS5usmPMiJS4rnblAZOnFzcH79hjrttt8RJVPOmASn+q/PTWvMODPk/+6zYYnLz7iysPTgvCGhBsLfOLpA7ufrC3APMsevAx7wDYb+JdAsYW51MBrAP7RF171N0J3Tl1Q0xaMXaNt2xMys+xQ0nrXAqNHDHLnHjrJfe2ij3ap4RWjN3fzWsKnODZFM5nHQX6qQU5E8XDxMVZR5jz1mFs0d7bVyI4D/myGklpaoLRAYQuU/uOFTVUXY/VkV1W1qWmAG/O6nQN3FxXD78eivaKf6jIBejvP6AUzXdPi6nfxaKyludkNHDSIZFV48377ud/94Q9QEbQFAABAAElEQVRVtEZm9KGiduVqCdaW+bWKC5XRUlZrefRCQnuI6XePznMcjQyA4dBvupGykYV82+u80bLXRHn4pU+9qzFfRu0J2/aEzDVxnNYmnQHnl71rG0ecNdcV6StrPvbSU9ZX7XJlcEGKp+nF8+a6RXNeFGusRSVn/jYlc4pp65hDDnLjxmyS2ywFN9z6RzfzpZdq8lC4++t3dG/cacfC/J0K7AcMZ594fAct7n34P26hVvaeeHZqh7K+IKTtbmP67at+1hfq+DbHbrKJe9uhBzls9a9//6eDHlY+48WX3I23/bFDeZ8TQjBuwM/isKwbiq43fJg76R3HJBK8rWSvNS2M1fzBWBO+/dM6zjmbn3I63KZPcK5evcrNffpxN26n3XK4InItUeH0l8UHLYuO5Dx61Gqxv+nlFqvVkveJUWOwuFLxlw3Ldin2RmjKkAOt1gldq6xLmpSVSguUFigt0FgLhODcS7aLdd3NtF8Ocqc+TabVFwZyEHXB0hPJuU/rS4UNClxYAdW1AsChCEBHztknHe9BWRH+Wm32lzL6kw5nx4Q//vMu98UrflDINmkZjcyn7W5j2qcAXaDN206ALROgx+WcW/UC9Gu+8WVvvhM++slGmrFaVq3fd42ybbac5C780Afd48/InfI7P6iWGeTg++7Fn626Oea84oYFkFuvTQLRvZ4cO2aMxvoE3+63r/p58farJ7mMehHDiiWL3SsvTPM7vLRPjO2VzQsjQ0A1CZybh1HzxjSLv1pqp7k8/Voy4HKmsPauZhYXIiIjqz3ojZBfSImSqbRAaYHSAg22QAdwLvldndPy50OWOGKpXCxy0PtC7dbSqlWlquBXR6oohTOXXPF9N2L4cM+/7eR2cHGJgKcFwMa6Ho7/SDsYHKGVT8DnQXvv6Z54ZqrrSyC8Lo5LZzeUfWkTfktF9Lvs/I95cM5v60//vNurbCvR/A5vvK0ve9G1tuueJzqZt8I5lnlv5KbjXPOAAfYgMVHSP0D0c2ZCykzkz73JzFtVL5iRq+j1ZrJwMTJa2gqi/9AQ9TZu/N7WWXch0LLoVrGMSwuUFigt0E8tkAXOvardmNPC61LFg/KQkmcIzaMC7a/NyfI7ZwYvIqOj7Cw3jYWLFmeuenasve5Q0qvArHT+9sffddsITJWhtEA9FsC9Z9vJW/onTemnAKye4z61JgX7bTBvNC5Uo1IWJRbrGw/rbbKpmqgu8/gycz5OOW/nYdEcul/5zpRbXy/bcmQU/lBRqrv1tR5z58mAnlfWpYbKSqUFSguUFugFC+SCc7Xd1TmtO/Ph0ldfcauWF/umQKPNs96waNUYYEHwPtgFVo/xh8blIv3I/8C93uROjP1vkQUwybpZCPuBWwArj+tplfJfco346XU3VtX51Fmne+ATgh5zOcCPHrcBy/9J7imsWFp/rDxsr1Z6pgA6wZ4+kMb1gn5SdqBW1wlhv+nzpdKfclw76PNri9tBDb7koUsNdVldNQDkBeqP9ZM8dsgLoTxsfP6lX0vaKzKeNnZXyc7HaAzpK3Kuuu6mDjoZL7rQP+xbbzAZtdqj7xawN0+A7Lzp7JyqNT5ZZXaOhWNE27yXsHvsFkZf0cF4LvxQpB+r4MgMz0XTG99zAuObDmnXMBvrUI6dw+E5m6U/unGOMxZXXX9T0hRjj3sN/bOnP3l9MptyrobnoZ1bjNWf7oyeACQN9FCC924igJ5qIAcAw9U+T0dLIe35dhl5c3Ievb1msVRWm9Qs/qGiYu3U5CpX0GuapywsLVBaYA2yQC1w7rtR46JQs5uqF651V0/elASUVBvLFr5aQzT1Qsk1WLtQxMts4QttiMDFA7CR52sbAYnTPWDjAm8BMBACUZOFG0kIAoyfGKAAqLAwToAR4H/m/34uAQiA7bR7gbkcGJC1fJov1M/aCGMASRhom2BySSMzLdfKAVpmvxGTh/sbA2QcdepZ3oc9Ak2fqQL8yAp5aAPbmRxrkzgr/Oybka+2lY375ibuqNPO8tki48nLw1l9YtzDscI23DiFwewT0jpLF2nvcd0UWsC2r8WrtkXOqay+2PhklUEDiIfgGCAMPQwH7v0m9+ZjT/QgHf04D/1TqJybJ7uhYAyim5m7c99jKHJOo0uW/pzT6M+NcAjQuXmEH4BPqNUn+gPvTJ2r4W+T8YXOTZ8F+tL9EMx/KWHLFvL10fzyiL3GHMh8mppTfZ0cupeUxZ/Sq6vZJrqyphxd7WRZr7RAaYHSAo20QKfgXI01al6N9EZaKnBhwA89OJa/pi3CcnzTo9qRVt3RzbRIy7hCO4KwUviGI97utn7zoT5mBZCLvfGGdUdolc4AIhfxRVophm+cHu8DznEROUCgBlkGjk96x9GJrFAm6U/pxTsCgHyK6pwgMM9qrtF9YR1/qHvkqWd6WbuqTyH4yBJDX8IDgHKe+mUrkGEd6OiIXMpxaQCM0Wdr03z/7UaFFVhAr/WP+sjhhsJWa2njRNmIAC88yKMvWQG7mh6MFWCPGx0CeqEDOoY8tvIfymO1Hz4OnloQAKUWTKd0e1Zeb1yrvfDlSfrAijP2tXMKoEx/7Jwy3UId0uMTlpn9za6AUG6eCKzwk+flYLMHacbIbkgM9AJWs84Na8vsyAulf732Knf//13ngfKJb4/G1/jqjdN9Y4WbGx8bd+TxO+OcwZad9Qn70kf6Z3YgJs85Fa74dx+g80vPD7icLF+U+gZKLoDuKMvmlP4SNyW+OXaH0INxcrfR1Tbyx6UsKS1QWqC0QK9YoAg494p0dZ7zVwf9yb1KaCbNKWtt1fckaFcr5azD5x09Zair48fkrJgC9ghZWzSyqn5NvHoLkLYVQ/jNZ/vPuujz+B1ZrGICGAyIci2xgzrDBQhoB+Bmj9Pv1dZ95KGnV7ep01nAdcT0MveEWnUAfHbQLoFV43TbgHADkSYXdwfCjVqxtDZZ0aTPBuwop4z+8eQBubyMSghtDBikDbuhoE64quwrxH8MLKKHvYho4waLrarSltHDtkwWcpDBgXsLwfhJoxMhqz1fUOefztpLizP7mtsS/WGMsC+AOgxZ42PllNn55ccifnnT+trezt2+/9DNrnbumqzOYp46cTMA+CVgQ3QFsF96XvXTiM5kWXlW30w/u/Ey/3ejF+mT8ZoMi228aR9bdz/Yrz47ZlvattZVVbC2faagDp8dJSZkyKhzzvaS6qxTpVwndQv7oEcd6ubfmis73ZRdVi8tUFqgtEAPW6AwOO+uHn6utAuJhDGRZwXoOfNqUDurZpdoocwwjTBAI4DUwErYQJqX1UzjoywsNzqP3c0HvZYsyqxO2meXHVRwt+hKqHe1r2o19KpoNRV74FN+wHEnJipkyc3T39wHrHKWm4aVhXG6DeySBqLwh6ubadvVGs+wLS9HwNVCKNNoFodl6faMp0gc9i+UmVfX7JvltpOuE8rurCzNa+2k3XmQYzcpaZm18twM2A0Bq9LI5ykNN23p9ytqybGytL7QsR9j4Z94XNb+5MPeESjSJ2448a1HBml7emLAnXY4l7lB6OnAKnrVtoV5c2cDFKlqpxvycmb34j7oTeEM2g1FtGTfoTa0vI3aYW5Q01Xt8qXQt+wwOvm6JF+W/PMjcxr+caKqRstMaYHSAmusBeoF59ErR/V3t70ec2U8+/koyHt6PJfGLNXXoZC3fh26UgP/b1Z0WZk0v11eHMxaceWij/sEQB0wY37PYbusvmUBipAnnTZ/4zS9L/IAFfqW1f88fWrtcoGrAfYCTAF2sI1tu5eWZyvrRi8CDtNt1zOe1k5nMSDTnhrwIm9vh66cU13R0dxnwrrdBafYjaci9AGAzg2XPW0J2+lK+qd66sG5yjnGTXH4pMDkddYnwDh68XSCm2LO0/TNU72/Z2u7ZpzMjREX82c0h8YTY1I5nU9mV3FEcylYNA+jts/LiUDfThZ/O0ex1Op4Kk9zt6QJufkcAbn8eQVZcqBl0fNkdJMOOD/jkOjxq4niM/D2KfhGf0HU2ijj0gKlBdZMC9QLzn0vuzqnVSPt2GC6uGTSVQw9XkVvam4xSE+Bjo4XpVhgZtRVlVltBYiyqhe+EBqtpHX8Cing3NwneGTPyrCtQIdAxmiZygZEc+fghiCsYyt5aWCAv62tTNoj/EBcQ5LYhFDk0T43NXyEBoBjfQHMAsLMHtYXfMsN5NIP6qSDrXoaPa+PgClrz1bY0bfe8bR2OovRy9rL06kzGV0pNxtSNzw/uiKrVh07z2jP3Jhq8eeVmQ83oDcNcs1u1pbJ6M45Ha2Wf8zfANrv2ORaO531id8+5yJPjAiA/jCEL9KG9Kx0XbNWMC8yfzW1CNba1JeUdZTYkaLK1MuaBPPozK9Z/Fmd6gKtpbmgdNa4GxGy+pLb90Y0mCHjf3Zln8zsQFkJ0LNtU1JLC6yLFugSOJehsua6ovZrn22REuUiee35Klm6EPG4deDw9fxewO1lpkWtZ5Tt3GHKaubRwvJZ8aNrfE//HPvl4nNrQDHkRR6uJ9DwWWfFjpVhVt0Bb/ieL1x0ur/YvyawCEjBLx2+s+STm7dqCMgFZN78o+/4OgAZ2oc+S4/xaQ8gAk/oYhO+JAhPqGuYVlHNwE1GGEwufuVpOen8E1ptBBgDcFj9ZoXcALnVNxvjpoGt8OOnHxZMJkAKkPXdL3zGyzE7wAeP8ZHHLQH70iY3NwRkW1tFxzMt1wvSH2vLQF7YXui+ZHxWjzikhWkrS9OMzq/FbMCYsOLMuNs5hZ3pM3ZBB/y8884pZNYTbHWbfobjyDlnN1ZmC55+hDemYTs8vaAON6/hEynOCc5p34d468LOzulQbl6aGz583c0djH5YKNIneLGh2Z18BPpJRYG+1gL57XOe1SgSV58FyBg4bHjk4pKA87Sc6jp2pln76VJqQ8uiszCSSU832Uk+D4e3tBWUXuETqN0M3gBNGXIwZBbd2otXhyzb3XjcRkNzRdQqy61UFpQWKC2wVlqgq+DcG6PWnFbLWtTLmpgzLzjBBK7yISNHuVfccxnSWWLRxSRTRga7SHbBCktDtcKPayxcssSvngMe7eVP6gEkcK9IeGN1kWO08y/7mvuZtqb7UuzqslBg4fzLvq4X4c71AMqAHLLGbjrGPT41q3/OXaKX6gClABi7MQAQQLe2rrrhZg+CQx4DIFxp4Uv6GOgY2iAvHYJl4wFcfUufNrf2jZ7OYz/0vFBbLQKK7SU76v9UNzHwEwOiw3awiQ+BrjzBwHYmBx7cDehzaHfq4dYSysMWZl9WRLsynpFC0V/rJ6vWdsNmY0PfAKFm97Ae6WQcfFodJMSR9YOb0vCcpj1o9OPDunmhb/eonRn/fsnveIMbR+iH7s8pAeXHBS7DkHXuW3lYZmliDl5M/pZeFqZtwLWFx2R/ADntzNDNovUd/b4l26TDGbppQFcAMzbydoqZ/DmtJ1DWtp0X2wXn/fXq/9t1rpheoXyrF9JIYzPaQ9fQHkX6ZLI4Z/5X/Qbs8zsOA32l3zfI9asxIT4ZAmGDR66vc0R0jiTQ4zAfpmGK8+BM9jXMmreh1UNP2i6WyPNlr7z/9NPzxqtKcvgjqCqoI7P/vvu6e++7r0ONlStWuNWtvF2bHUz5WVudnM1QJ/W6s3Z1QwY1Z9Zauny1e8d3HsgsK4mlBUoLrDsW6BY4l5lOPyvaT7peiy3faJyb3TYwqNY+RbdfWtppyQUmrvHcXX9zfFUvO4T1sjlqUe1FNVa2w4u41dl2y0n+I0Hk4SH4jwYJuBDYIcIDFYEAc9OAjqsFASBpdOP1Bakyo6Vj08/ooTyjhTysZgLSAI2kcSewcstbvbzYdE+XZ9kI3iy61U332dxBrNx0szw6Ys+0rqEcbMBNUmh3Gyfkm/5Zehkf7dU7nml5oe7om7a79cli4w/lWL/S45pl1yxeo1kbReQYb9E24A/tRj49jiFPVhnlhLSc0BYRR/TXbEUuz7ZZ+ocySMOTPpeMJ61Llt5vkw87NxZs5ZgG4kXat7Zqx+2zYJpvw4lbuZHjxqfI4ZwX1wWMJ6Fd3tilc13LktQ2jeJrbm52AweGc3JUeY/dd3d/ueOORFJXE4Zx0/Urp5xxRqhpujzJZ6x7J2VFE90G6JNPKtpUTb6Lj57sdp60QSbPQ1Pnu/+96ZnMsr4knrrnZm77zUcmKtz79Dx37YNzknyZ6P8WKMew/4+RadhdcI6c0z/0IRNXV7x8w7EpgE71rGk6pLVfZF5+9km3cNaMTtoM63bCWhaXFigtUFqggAV4EsZq/y7aD99utAtUq4OlfZ7LqrTFHvu45gEhkA7nuay6Ec0A8rhlL/cJQM9bni68zWJW17IMVJPG46gMBmhZ9AzWhpCuu2+222bsyA6r6KyeU9YfA+DcXmJFv0dfqPXFwP7Yg1KncgzXjHOgEeCcnnZ1TvP1whWeqse1eXK5EEUtrj92vFv00os1VtFD7aILWKJreD2DrQylBXrIAu1nbH4D5emYb5s+L0kmDb3c7Hd/OdrhZoN7Tbd3UwpkR/3sQOjQ/RGbjXPNLQLnyUmTJMQb1A/nVpWkuQLOpA1oWfRG+aBnylabLdW+Ook+PZLwhkhdbHxDHXyGeqT5ROjDMxe7T/7yUXfANhskq9IA3r88Md9Nnb8s4etPic1r+M33Jz1LXfItUI5hvm36S0mjwLnvT9ZcV6ijqctBNHGqZnQp4W/kcghfRGsXW3EDBg91o7aY5OZNfaqdnJuKLg34pxMq/tvSucxlQWmBxlkAoBT/RmwF01xpLd+4xkpJPWkB3KcA5/ivs0NTNprtigZ50LVaVsugwW7U+EkBMZwXUzL8ORfQDLB7kv5kzdvQ6qEHmnQnWXgFvTuN9Me6APGpd82Sahz9O+w0dliH1f7+rXGpXdoC5RimLdL/8g0F593tHheL+BrD408DLia2/fITMPpCSipuhFbRl7y6wC2Z/7JVKRQbUC/EXDKVFuiOBQR4kvM4Bj/pfHfEl3V7zwLfuvoXjiMJ3d5UhHmteNh42x1dpWWA/05oMnEWrF5fS9VCG3UjmadD4RX0PAHV6naeS19oqAEti965tHWD47AdR68bHV2Le1mOYf8e3J4A512d0zxW0aqO7YARzb0GXSxO2zOkk664jads42b/92G3YrF9YjvkSdcv86UFSguUFugvFigyV0Uz48ZbbeMGr7derHi6Xm3kCsC23YKaPA7tuBiC4FoYtavzfGjptNZWVvxDRVajjHvVAvtuOdLtte3Gvdpm2VhjLVCOYWPt2WhpPQHOu6Njq8B1m1+B0rTNzB2vLrZfCPKm82p6y8BBbvNd3+jmPP24WzTnxVilap7u6FnWLS1QWqC0QO9bIALdfJRtzA47uUHa97x91TwE5GE61LKdzpzaxg6CIvGksrXOlf9GraCH2oXplvZJPyR3TDdiFxekZslBB+5e8sKadkkBkO08fqSbMHpY8mInL6C+8PIS/3Ln9Q+95F5ZujqvuwmdXT8O3Tn/o0oJY50J3C3esMVI73+/0YiBboP1BnkJpuO0OYvdszoa+cGmY3cZ7d641YYOP2y2uJwhWzw/d7H751Pz3d+f7doLr42yc9p8jbRPT41hWucy3zUL9CQ4rzWnZWkLMCf4en7S05NFJkybABOfXfhEDOfMJG3MSIrC6K23084GgzxI77j9Ykd+q1fGpQVKC5QW6B8WqMaHLYMGudHb7CBwPixWr7rcI26VhLNbxW/lHfFV0Zs1ybZGlCYm3BikNwW1mZOz5vM8er02C/UJ61ZO+9CH8spCPpe9a3gVS6eZvfbc0z344IMd+FasXOlaC+yDPn3iCR3q1kMALB2zx7iaVW68Z4b7sfdNb2frrN5lNz/pQeYR22/o3r3nuATwtkuoTs1/bbn72h+ecbysmg6AzoNft3HmLjNp3rz84V//V2YRwPPEvccnNw2ZTAERPX/0l2mZALqoTUYNaXaXvnNbV+sDUKZvUZmNsHPQzSTZKPv05BgmypaJblugJ8E5yp11zjmFdTRwTgX2QZ+xuv3bcubq0kFYAsqjkupLVMdpfYU+HDJ/2jNu2cJaN8RBvZT8Du2XhNICpQVKCzTIAtWr0dWzmTXRpP3Ih26wkdtgwmTX1JKFSrPrRUvknSyKagFk/IoFrmVx+/xoID1vH/Rdd97Z/ePOO029Lsd5mrVk3RVktVIxR52swqI0zf26D+nADS3PrBFzcNHoULs4YcLo/C+I1pIyemS0wpzHs/eUDdwxb9isMPBlxfqMt0x0p1/9SAeRUzYZlrtHewfmOgisYJ+w/4Q6ajh/o3HeUVu7ze6Y1mHP9c5sST/+O2tRp+A8VKg37Ry2S7qR9umpMUzrXOa7boGeBudopvXvQgoCzhNOvlYnYEweNxcwsn/KmTUFZgDoalJ1pUHy09z0dTu7lcuXuYWzZwqoL3ArlnRcJGhXurp+O71MlRYoLVBaoLEWyMKG1sLgESPd0FEbueEbbyJgnuWZncygUZWMqautKQPQUy1ePZevizKac5skP14wRgwgPcKoqTZ8S8zVHTGtL6rjT1MlQ2HVz+ppttju68AVK9vHpTPZ2bpn61mDOmzQgBql+UUbjxicX6iSrviIs6LMSnAj3UjylOwK+AxlAeyfeGlx1Yp/Z7YcNqjFfebIKTVXzsM2SPeVnXvCPum+lfn+Y4HeAOe+t1nzeS0z2KektdVhm6X9I1dVYgJPz4PJlojtBUnKI/VQgaTEtQwZ4jaYNDmlScibKiqzpQVKC5QW6BMLtM9b2c2n5i3cAAlV5ChTMSBeVc5cq3LAOa4uHOBR5t/QqwNalUyEKECjrLshp5stTQWlqxvdVcHXz+tjFr0hDQZC5i5clvhAB+ROk/hkm+90p8x1MOyx1ageB+i4bdRaOTe/c9QOP4SU7gauMQ//6vGE3JktD955TMJbNNEXdu4p+xTtc8nXuxboNXCubhWd0zyfAXLFPq8LTYUVHxPiV380B4fTsNVJTBgWxsQiPEn9dMIaT9PLfGmB0gKlBRptgYz5K7OJjHnJwHTVI8QMPpNnfKpHsg0c3LraT7cV5kzkxTFS7LDqScw8nWS6nsjD4S1tBdF/8BC261pQ0wwTSoGWRQ95GpD+4i3PScpzdbszXP7X6Y6jyEorLz/e98x895RWnAn4k+88aQOfTv/JWjGmHn7wFvJ85p+a+Vqhr4kCrPNC2t8ef/Ez9h+f+UQA8A6YNb/5rtoyTxfovWln06Mn7NPoMTRdy7h7FuhNcO41LTCnJb7n8BqY1ipORT7oNvPbaroH7CB0+Gpey4JCkymFsi8kAW/3zFvW7mcWYGRtzC0djjZlYb6fqV+qs85ZwM7WrI7XKkvz5/AyF1IE+NaJ733eRePlUaZfXGDa5OPuM8TwqYA5uhkGjnTIo6f5OsnneZCvkx8quvbBOTVXlfNsWasewPznd77Q4YVKdij5wft2yHT1yHpxEv5wV5M8gM6XT9Mvs6b1BlDnrYo/NHV+h/rsLPO9O6a7XXRDwU4r6bDflA0TgG5ltWwCDzcSN94/y/cpzw4my+JaMhtlZ9rqKfs0cgzNJmXcPQv0OjivR90ARFu16MVQXUV0AbCdtgDq0SUCujjj3QasTseY1Z2Mi0oVY7q8hGxV5lnDMoweIxqOoqUtti6l80Yv49ICfW+B9LzUiUb+CWNtnjbvYy4e410dvZrp51pcY7IAOHMzQD0nVL/YmsNUgJzX2/JDRQWMV4SFVfMQWId1KMsC4yFPT6TZSjEv3PP0K5lFgPQnZr6auerPtpH1hDsfn+uilfaoViPs0Eg797V96rFlydt1C/QVODdgXUtzD6DtwqDYr5bHQJwVHV/Eao5CO1vw2LMmytK0n4D/moyBinmXioClTPapBRhJG6XORrWz8j7tSNl4aYFuWyD6JURbKEbCOpzz8Y+lYgsasZ+6Xy1XFYo9CRcX74eueTdePfcSNfEyl2fN53n0SJPifzvoHFct/pJo8bbq5szqeN1CygodLLD95vkAvdbLqdPmLMkE6OyZXk+Y8+ryKnb2fzfXn6qCPsr0tX36qNvrVLN9Bc7rNrKAtLmy+LpcMfxVo6M7S+L1CGK3t//zZviEHl+lqtZW69ayrNBPLJAMa4Y+tcoy2EtSaYE1zAI2l8Vqa55M5sR0TzxrzO/nUzEksdWnHHeW9srJ08oaq+dwN2oFvb3l6lThDxUFuldLqDdny0BBvUbdhQQiy6QsUAtQ//7c3eu2kX3QqO6KcQVW5/OeMnRVZnfq9Tf7dKcvZd2OFuhrcF5k4SG9gh71QmC92WZcLj5RMIrFET3O5QB1/8JTR9NkUKyVjKKSVFqgtEBpgT6xgM12HRuvmrFid5WEK6mWJJKiKAHdJMQx29ryL8aovqZfBIloRg8FNQq75mnZL1bQww6X6cZZoLuAunGa9E9JpX3657g0Qqu+Bued9SF5OTSDcdXEce6P7zwmo6QklRYoLVBaoLRAT1nghN/c6AY80PFDj8zXHPbhImu/36ygB16PpluX4ubEJ7K9eqvuUnK/lic2u89pr1GmSguUFigtkG2B/gLOs1ZcTGN7BdsD9XiVxpzMRzx0v7GVcWmB0gKlBUoL9JIFRjL32gp6HJNnN5XooWb1Wjcf+iz6sc9aXcjDuI3C3bXabi8z3592SpkqLVBaoLRAwyzQX8B5wzpUCiotUFqgtEBpgX5pgTxg3ShlW4qi/1qrQYWVYXcCuysJKuEnWakF3muVBXLKZLUF5r+23OW5cVx285PVzOtgrrTP2jXo/Q2cF/H/9j7o8VNF5sBkH961a2jK3pQWKC1QWqDfW8DP2ZqHK/i0g1VjvOoxaob3h/dBz6DX29GmHIxb+qDXa8k1iP/lhStyAfqMV5a7qfOXrUG9abyqpX0ab9O+ktjfwHlX7cCFwbb/6qqMsl5pgdICpQVKC3TBAgbOC1bteR/0gui/2vOmoPYpNmRkrqDrLiWLnqpeZuu0wNyFy3I/VLT7hBHrPEAv7VPnCdVP2fsrOC8yp/kVdFZPmIft6aLF/dTepVo9YIFGjHnOKlwPaNv/RRa159pks6J9zhu93rRFZ7r2pi6BPfyKeKhbvB96B3pcJ48eiCyUzLtW9K4PeiFVS6ZGWWDqS4tzRb1xqw1zy9aVgtI+a/5I91dwXtSyVbsCxBcl/3i1qICSb822AGDAAIGl0zE3b3akyyyPFSxNvC6FsN9F02afkN9oa1Kc1j/M15Omz2n+RtshlJ/VnpWnyxqtRw15ydwb3CBUzdGpuj29gi4X9PY9HmulU3p1KdvTnemSUmtopQmjh3aq+W2Pz8vlmTJ2PXfOm8fnllvBqCHN7thdRrt9t8z/6JHxrmlxX9unyBiGNmUMLj56svvGu7f1x6l7buYYn3U1rOngvGrc7IMYwYWhqrzMrF0WMDBisT1BIW9gnJivyNbKWz2LTV46XrusVw0m6VvYX7NFaLcwHdo4rBem+7O9Qj3DtPUbWtjfWmmrH9aFRrCyKNe1vyYjHafbC8vDMtOja613rZbNwTYnd01KXbXysHdhH/S8Jfh6tDAl0nXy6Gm+dTG/dPlqN2RQRxC286QNHADtx3fNSsyy09hhjs/X88VOPgrEcefjc91e226c8ISJg3ce4yaMHub+/Mgc99jsxYnLC0BwyibDVDY0+aIocvrTR4bCfnQ13Vv26c4YWt+4STph/wmW9TE3WbtN3sCdfvUjVfR1IbMmgPOic6Z3c2HQuDBwcSrD2m0BwAghBCVh3hfG5ZbOig1I5MVZddYmWmhH+pWXz+pzZzZDlvHUqh+WWfshrSfSYTukLW8xbVra4rQeYd8sHcbUs3y6Lvm8snR7YZ605S3Ok025tUEc5rPqNIimVqO2YtcWn/WkfDfsovM8svJC3m4whQF6nuB66H29gs6KMYC01hckj9ljnOMT8IuXr3S3/zcCpQBhaEXr/eTvMxKw25l9rjnt9Y6XFafNWewu/+v0DuwvvLwk148cXTnSYdGyVe7aB+d48rX3zna7CMxngXwYAHkcnQVkjBoy3YN+eAGMuMkMzbh5MFlmS8s/+sKr7im53eQB/b6wc0/Zx/pM3N0xRMbhu25K1CGM22ioHwsb7w4MayFhTQDn9ZidR6jJh4u4MKyFIH3zzTd3w4YNcxMnTnTDhw8vZJ5W2eKxxx7TdbrNPfHEE4Xq9HsmAybEnR10xvjTHQvBSzod5qlHPk9OWm7RvLVRlD/ka6QuJos4nQ7z1r7pHcakwzy85K2+lZmMvNj4w/IsWljeFdmhTNJ2INfK0nHYpqWt7TDuLG1182Jrl3JLhzHpMJ+WQ/t2pMvIm35ZZY2iBSvntdxbGtVcLTktRdG/zNrtkLdSnkfvdoMpAawYFwkGWKfNWeLBJODcaLXqG884AfuiO6SwDSIHdbMAOqDW5NZqOyzbYfwI52KAjh7X3f1Ch9XXkL9IGoB/yLYbJsAfcF5Er5CH9I33zMgF6H1h556yT2jT7o4hsvK2y6Rs+OBevc+myT4LaxI4Lzq3YkyekSUgvTcuQj04gttss43bYYcd3OTJk91WW23lAOcDBgxwLS0tuvdoktdGs67Rta8ogHIAOsfKlSvdqlWr3AsvvOBmzpzp/v3vf7upU6e6xx9/3C1durQHe9JDog2k2KP8dGzlFqfVsPPDYgAF6fRBPeOxOC2rO/muyuxk7GuqRJthfbORxVQ2exqfxZSZzsThQZkBs5AnrEOaQHkoM6K2/w3LwnQ7R3vK2mqn5KdMVhiTDg9qW97SeRKt/5Rb2vQJ85Y2PmLTgXQ6WFlaD8uHsdXNatfOa4vhpa7xWt0Gxn67b9pQiMB5lK6FUTuby4qoF7XSkbNXr+x9vYLesfv9n4K7yqE7b5q7Ap7VA9xfwmCrq2kXiZCnSHqS3F7WxtDT9mnEGNbas50nJutCWJPAeVfGw1ZrEqDeFSF9UGfDDTd02223nTvooIPcrrvu6gYPHuwGDhzoD0A5B6AccE6wuNaFjWuFHQbUaWf77bd3BxxwgFu+fLlbtmyZu//++92dd97p43nz8t+56QOzdGwyBCYGIonNz5xy8lYW8ofSDKAQ22EgxmKjh7yhjO6mTa7JSeeNbnEMeizr4yxaFUOQyZIf2idMF7Ef8tKH2Y5mrczSWXFIC/ti6XQMfxjSfUrnjTcth7zR8voa8hivybPY+mjtWv9Delaa+lbHZBFbO2HbWfpZufGbjLB90gRrJ52PSnvkr83DPSK8TqGFV9CjqbVO6Sn2vLsQPpbUlh6soK5+SutswE/64puecP979DaFQDr+zv94bK5/eZC6FgChT8i95MS9xxda+bZ6xA9Nne/uefoV97tH+/kFMFS6znRP2qcRY/i3R+dmujMx3rVedq3TDP2WfU0E50U/Apc2eiPm2rTMRueHDBniwfhb3vIWt/vuuzvygwYN8qCc1XIAuYFyYgt51wArD2MD6EYzoL5ae8VzsKp+4IEHur333tuDddxh/vnPf7rbbrut/66sh+DEgDlxmDZQY3H62pgFmgAwBnAsTvOZIbsbG2hCTpgO5Yb0tP5hPkyH9S0dyoFmeatHzGG2Ig7TVm7yTAZy0nZK560t4rx0KDetE2UhLeQ1edDCtPFAs7rQLE2cdVif02Umz+pb3tokDo/QBpa22PiQYfVNnsXp9smbbhaHPFbPZNMWh/GkPhiU267J6WbcInXVeAcpzOVZ83kevYOATggahcxQ+ej55+eVVVVon2KryHVldtpxR/fEU091qMNEy4SbF2zl/bGNj8ljWevp7Nbx9p038b7wm8vv2HzKAWj4OONG8eKrywuB6EkbDHYHbLOBfwl02KABVYD9qZmveVuavDunLkj8ztd6I8cd7Cn7dHcM8dHnpVD8zllRf3zGQveH/8xxD8/M305zbRizNRGcY/ev//gnup7oq3Sa3DmaXO0nHTbPwfuRUz/QL4dugw02cIceeqg75JBD3OjRoz0wD1fLQxcW+mGBtPXPYivLi62+xVaP2MA6MdcP3GBWrFjhgTluL7fccou744473FMZ15u89nqUji04ACl2GDDXEwYP0C1vYN34zI7EBmTC2ECNxZSFaeOlg6RrBWsrzZNVz2gWh3VCWiizSDpLjsmz2OQQc5it0rGVG7/Vxz6kLa6VtjrE6SPUNWzL2jMafEYzedAsbTE0AnnjJ29y0jH9hWZxutzqEqcDbaQPs4edP2E+zZuWR97aN31sPExHoxsfdUyutQUWtAOapeEzHtI9ED5xwQWZUllkYOEhHbaVO9+DDz2UJtedz0O/lY9dcEGhnmbdPdSrxesF0J/MmDCLAvRHNzyq3iZL/tICpQXWYAusqeAckz85d4GraHYFYHI0u2gaNsCZHhZcQSxsvn7nL24bb2/EAPO3ve1t7q1vfat/2ZMVc4C5rZYDzEPXlRBMkzZQTd8B1UUC8qhHTD2TT12zockl5jrCAVDH/WXJkiXur3/9q/vDH/7gnn766SJN9hyP9JfS1SvlAHHGnIOLf5gHyBhQt7qmHeDEDmwZHoAZyoxmfGFscrJi2soK1A+D5dOx8RidfCjT0nmx1bcYOSYrTJtc5HBgLzvMbsRWJv4xG23kpb44d267jZCJrSy2tOWtzTAOeUzPtD7Wruln5cTIqhVHpe1/TQYxgX6G8lN530+Vr9BvYf7ChVEd5a3/K0Wft2BBpEdWv+zcScfwhn23ftCC6WZ6mU7hGIRp46durMMYzTGrdaM9l/HhPJaeSUy70ML2qdvg8MkLL8yU6AF6MD8b0zZbb+0e0jsx3Q2toS0DYe1XhIDYY8kcJXqsvVJwaYHSAmusBdZkcI7RR4zSy9oKdi0amMI+qaz2colCmh6T+yTCn/zII4/0K+Ybb7yxGzp0aOJbDmA2sA0wBjQDlA00Uxamjdd4DGSnO0Y5ZeHBBZK8gXVLU5c0wepx0wCNOvjF4wLzt7/9zf3iF79w8+fP97x98ifWU8pFIAvAwhGD9Ga5CM1/8EGv2kXf/777xi9/GZXDb3VVetBuu7nrLr3U8+136qnuYXa4MfACgEkfXHftoBbpdAjkp4t8Pl0nS14WD5VD2ZbOi43fZIWxtWk0ZNiBHQGFOkaM0O9O+YW6STMwy3kz7S9/cQN1bhx+1lnuFrlCJWDP7IVc0p3FxmP6mM6mC3GsS6KflcFr+odxKAueMFhdi5FtbVhsNOW/c/HF7hi5fn39qqvcx7/2tcT+X/vUp9xxhx3mvq3fwTmXXRa1oL6M0G8anRa+pqfn6EH/0ucTeSuzGAmkCaZbqA86BePi01ZOTFD9z2o8zjjuODda75h8/2c/c2faKjZ6cCCHdqwNazOSsFb/banQ+QIhNmcBznwWJk2bTEOuPHrIU6ZLC5QWWHcssKaDc0bqxhv/XDXftTTpYhOH9DzYH+fAHfXE88wzz3QGzAHr9sIn+hrQBpyTBoDbQR63RfLLlV4l/tUxiGgVIOV64q8pXBOU5iokCOAvxPEl3zXFIKFZMlhJGiRegFYI1g2wW4wIdIMHn3jorPTjq/6mN73JXXnlle6uu+7yK+zw9lqQTgnAwA52xODcr6ALPA6SroDIU445xn3jxhvbAY7Vly1PPvpotx6giqA+ys+oHVClgRUAR3Wqjqhm/l/aSgdkWLB0KJcyo6fT5E2mxUazvMVGJ07LD/tCOYF6ZkuN+TEHH+yu/9a33Gytwo7V056kDB4LsrHeZM4G49YGcTptNItNP+Sihx2mj8Wmo/GZnax+GJuOYRzKDdPIN9kWU8/6yrnF+UEZAbBsMXSFY/bbz13/la+42S+/7MbqZtb3mf7ZeWSx9Zk8+pK3fiDI9DI9DJijA/pY3mxCHYXj5C732Q99yKf9DbzxWhvWrsmHk3TYtq/dmD/pedmk5s3PeXSrVzTOa5d5r9cCk3YZSguUFigtUMsCawM4p3/f/ub3qrvZrIuaQt5kbO/h5JVXC+u5HEAcYM6OLOxdDtA1/0sD4LSeBuXoD22ZjlUCmQDxJgHJFaq/YsBA95zqNDVV3KOK/YWNWAdhI/G/rMfbdoXgke84yRuhC/bGiofqojxSLiut2r2lSTcELTqAGMgx0E7MkQ7Q6BO8p512mjtYIO5bAnGzZrV/5C1dp8fygAs7DLSEID1uePtJk9w7pOd12qHGA5y4X1tttpk7VrvYJAGgmQXQAVIGoizm+svRWUC/dAjrhXIsbeXpOJRjci2mzGxhNIutHvJC/S1NOWXYhTrE2BNbEqABxKGRJrZQC6Aj09rEhpamXfJmV/KhLrRhepguFluZxcgkWFthbHTPoD/UIYT9tHYstjKTb30lDgD6RT/9qePAxcXTkavfXRLgtX5ZP/PisO8IsLbRxfpN++FhZcRx2GOnnXzqF3JDO/XTn3bLFut9KsYQ+caPbAukzX5G68O4pzFt4V1cGmIDG8S0sDx6mq/MlxYoLbBWW2BtAecM0pixmydjxUTe1qQLfBDSQDxaS44Yngz4ejPJ/uWnym2CVXP8zM0v3lbDTRcD6hYv1YW4TRf7iuosFaifrovrE5rXHxowyC1sXe1mr45fkI2xSfoii6VeWBXdwOjqrIswLenPSuq1ucGSNUZyX7/eem68AMbWkj9KL4M2L1rkKgL2Q+R3bmA9BOrhBZS+0KcJEya4L3zhC+7qq6929957b++tpqsPuUAGUBKCJfX6/Ycf7q7TNpIJyFT9k1kVDkMINmMAOViythwzxvfr2Rkz2oGkAcG4fovGbKIAP6vxL8n1Zya+v+iYETaU28iksWPdVO1Dn+m/TJ2U/PQYe7Gh/NgeO8mPd5ZWcOe88krUcsCzxSabuPX1Yaup2gP/NY11AooNpMUyqkAhUqBjT+yaBnrQBUZ31HmAj/aMOfqoH/IMdFpa+Q11vm256aZuum7mXoQvtnEC1GkL/gw9NpXu42WzF1RvFluAGo/VoZ4dtG30MLY6xPRD8WZ6OXucxneRzv/Hpk9P6F4+deEjAI4B3XF4Gv0tGN3OOeTnAXTrMzqGaXS3YHrSdgDKx+n8Gi3f/6kvvugW6Abb+uB1Vf3NZCPCHPnEL0M240U7cV8TmyG/N0JeO9a/LB3y6mTx5tDyeidrFAt5AorVjriQkSUnj16P7JK3tEBpgTXbAmsTOGck2irRy41+VLiYKR+G4PIWk7Nmx7BGz6aPkx/oAVqdtVVz3EQIgFxb3TdADg3XldW6qDcJxKwSeH5K6X/q2vpQc8Ut4GLLhWvVykjpWFaU6fjXr3w3Yx+sonY9XtEf3rJVO6zKT5PMaQLj/gIurikC//uNHup2EH2MVt7adLRohX2A2gWs22GtoTPt4PJCOPHEE90ee+zhLr/88p4H6eFFnLQdAJEQ1Jiyig/RE4w9dMN0z7PPep4BAi8na1vLqkBfDFjJDhe/973uDAH7UfHXWp8WoL78uuvcd2+6KbHbTltu6c5517vcsZI1yACahP5Orj+f/clP3EPPPJM0sY0+MnWJnjocs+++Ce1ZyfyK/Jh/ePPNfmzeq5X+H5x3nntKYHGX973P02D+9Re/6A7bay/3lWuucZ/70Y+S+q/pfQDG5qiPf9xd87nPuTHyPSZc/qtfuY/qyQaB9i7Q+LxBu2QQGLsrfv1rd86Xvxz1Q3kPbgM7Hrznnu4a3XgRNpXMRbff7r5x/fXu0/Jr9jb2JfojO8649lq3mV5KJNz+wAPuI/L5fwKwCziU7DHrr+++oadI7w6eVtyipxkXXnGFe/hRPQPifOYcRw+C6RGD05996UvuPcHN1Kd//GP3cf2+Bqj8nZ/9rLvlnnvcENl+7u9+56vvfsop7rHnnvPyjpM9fyR/8Wd0c7XT8cdHsnWOfEr2YNw2lm4W0PlbGtvvI8d04HwiEMfnOtmfa4yOws3r1lvdOervwbvs4q5RO4TEXr/5jfu8Vtln3XCDG6K65+q38UPZ0ID5hR/8oLtAN/AP6SNh+6g/Vf2nPQ718Wi5y5x38snujTp/LVyj8ThH9vNAXcSffvKT7u377++LP3zsse4Degn96t/+1p35mc9Ecqw/xASLo1yP/M2bgaHXKuuuMvFZ1EFME/uPFzki9UzNvoo76F8SSguUFlgLLLC2gXOGpLW5Rb7X2lxRx+omXdDtApYTt8n9w47eHFLcP84991z35je/2buCAGIB4oBy277QPgzE7ihLtYK9hAu/Vtlf1QrYdaNGudO0Mv0FXcL+qkvDAkALQMX3U3GLXvBUutKsFXa5ulRaFHMIYHu64haBlcpADpXDMyjmo04lloVRuEgjW/FTravcj7SKeI5A+Ve1CvywVhZXSJ+lAqysxqErerOrC4ft8kLf6COuO3zp9KKLLnKbapW0x0IILCxNbIe3UwRsTIefafcZwinynferigKVpwgsbjJypLtPX1F9jRcgCQBsxkLHxSed5D717nd7cP6kQPQMrUpvpRXcK845x73nkEMiIK8+r1R7J8r3d5lscr92VTNAfoQA7sUf+EDCB/C//CMf8WB57quvuj8KyLISvKVkflV+w7sAvsSDfkNxtaE/6AKNWO14Ov1DTzukNvTf6gXG4fHqPV1BZ3j2EnC8XgAXcP6KXlx8UDoC6M9W334m0G/2qIrj8+1JQHYcntSquz8HKZOOFn6v8eYGZna8Yn+wboS+LuCZ6C79b9SLlgbO//Gf/3i3kLfqZuPGr3/djQLYI8/6QzrIX6bfkoFz3Elmy2ZfEKgdqZtYbw/qYSMd5D3N7AZdsjwNe8Z8xG9+wxs8OH9C/bpbAPkVPVHYZvx49y29ZLm9vtrr9Uc29iYQm27EkjcUeUaXXZ7kCUscfFq0lTp+fccdXocjuTGzfio+XD7rQ/Vbv+HPf66Wbe2IZ2/peYPGFnDOOfb8Sy/5Fk7QjcdNl1zSLk/6vKzzisDNyJPPP9/+m6DvHBbCtNF6JKbN3j/yMLgfSoazs8Ps1Z1Yt1ve5l2V0SPjUQotLVBaoE8tsDaCcwzaphXhio4mACqxgGbRo7cGZH2txp2lC/zWcjNgZRngChiyVXNALSDdwO0KXZwrAsHzdHxF/GfqsfX1AslciP11jVVwAeCKPzTft0gegF2AuW3FMte2VH7kAo6tL81xrbNnulZtf9j65ONu3gszXJvAWNtrWglf8IprW6S0Vt859Oak5OjFUrXnwbuBEC4kXMEU3ycdL5UOZyp/h4D6KrkArBQgWhnfZJj+4RMA+kmf+ULp2Wef7SZOnNhbZo/aQf+sQ6VX/ulPnuf9AuVjWWEWaDpZ4Ihw5T/+4WP/R3RA2Ag9xThbO3QQjteq57Yf/rAbr5XvT//85552tl469QBO/X109mx31ne/6zbXavfuApO7CoQfcdFFnu9AgdUBgG3ZGLscpDxhN4H8Q7SyOU513i3wfLpWuh8EUEmeB4EwMRbk7SBPQEfGzA76rHCr3IvWl86bvv3t7litfH//97/3ss5+xzt8+Y+U31B6v+GMM9xBH/uYp3GjsdO220YykUsbHErfLnegi+W2RJgtl51dZQPff+PzJc7d9vDDboxWrMfKPuf+v//nqYeqn1tvsYXX8X0Ckm/UzQE3OJPFt98nPuE2kh53/ve/bgvdyH3oPe9pB6fINnAax++Nx+EKveS7kfo2Vqvgn9cThyTAZ8DbiNjG7EY5ATsZTfFXtJK9m/q0neyxl1afJwr0/1djgKsS7ywkesT2Nbt4+6On0YmVv103HhdrxZzAzQrngbeX2v91fI4dphX3MfqtM3ZT1MYeenGccIN2xEnai/tt7ZzDqr/CU7qR2FJPdCaecIJ7T7zr0L6ve507jqcSav+kb3zD/U06EP5w991uV/GdCYDPCswh9rQiq7xBNEzTF4fO4DwMzo+lyNEgC5RiSguUFigtEFtgbQXndK+Z1d/4aGoBXCpf8OiNE2SMQOxHP/pRD0wB5gbKAeS2cm6rz8t1QW0V/wqB38u1Kv3hpcvdA0OG6e3OjZ3jkbsunm1yxWi97z7Xqovtao57OO5xqwWIiFsFcFr1tc+2Jx53bU8/6drkStEmv2eOV+YKsAPWRW/Vo37SbQJIbfPnCdCLZ4XAukC/GyDwIl0qHDISINsDAz2lICwQz/el37my93+kb5MA1UoBTutTGAPaeUqADG5UPqRV4Z3il9a8sEb9yQMWeXS1+5IA018fecT38f377+8O0Wrk7gJIs+Sre+Xf/96uGf3X2O0gcLme+jlfq6q/kK0NPF0nEEyYolVvoxF/T+4Gi9R3o/1Jba2W7XDB2FRjDCBrBfjG4Vg9XdllyhS3ifyJfyP5v7zzzqSutz986KJ6JtPnoSMHECfZCa/I16kfvg3Rf02f4vJd1Q7hZvoR0/6svabvfzJ6M2MsgBGZdtCuHb5mxh/K4/Bzgc/XuKFU/Z/K3cbC1nLnob3XxTdqt+kDNFN1DqI7/L+PbbmF/Kq9XrQf62fxerpR2izeb/1qrTK/hkuW6v8ovuHybWEL7MRhIaQhk2D2jG16u34/D3BTBK+OhdLpCZ46KPg2TRfrK3HaRjBDDw9oBOOVnL9phf7felJDOHKffXw/D9d2pYRb5Ar1PP7sxm9x3P7u22/v+b4p16rZ7Lcu+rWy+T9wDVLYEftSx/T01NQffhvhkSpe+7Iak2hGq4r1kmixrmodpBhjDS4kZH3wCBpL/HlBQ1WG0gKlBdYyC6zN4JyhAuwAei204arRT8ImAjmnn366B6bma87qMgGdAa0e/OpC2iQXlgFaTf2T+nPlcO0xPWKkVsTFq5c/3SKtdL/yqmt7cZbTl4Gii65dfJnTBYL9AQ1QRCCdDvBqJT4MbYARgZPmXd+gi7xAySrVF1CXhtHFG0Agnf2VQyLb8F2P7f3iaq2oS709BVqPF+BcX64UrQIVrQKl9JM+2kGb3KCwU817tDoK/d8N+PhI2JckHetnevoYGrbnsHJVYBX9zQLmp2jlfDsANjQBSnsfwBPiP2M1RoQN5LqxWPtfpwMuHRvKPWYee10rnCX/aPzZNxeYHM6KuUKzjQuxjlc0Htdqv/BjBcwulf+znPY93+NyR/iOdt34rg6vb3jtZkzoA4fRiZFpdC8lejEwTka84uNc3FyuU4TfaFcPH2KbDGHVWWEzypEZ0xOeMA/R2rPYM7rIBjEv/tCLdUM3DNmxnuNigI170XvipxZU9eeZYg+G0/2J644HvMdhJi402ENgeqZcOZbq/Mev22geaBtzDLq9zsi2QH1k62CV/wyNGy+3jtZYErw844WvSEjbyeqE9ZVmFf31uik8Uq5PP/y//3OHy8WHcMMdd7T/hkNZqjNYdtycGygFnkD4cUeujlnxNwjGYt/UmPgK0MLfgfFYDFOY9pUa+ycLn9ICdD8fpprD4nl1Uqw1s+p5ZtCsV4bSAqUFSgv0rgXWdnCONStNWiHjgkJaE/yqprxp2LP02h98r0/Q4+SRusizs0n6wgNA9UFgYqAAx3y5inxZri3TAREeRKpUGKLSpssT4G6YgDMfh4lBQxtAmx03uDBbsLTFRrcYUBICk5heYTW3TcBVrjJy5BcPIFaFJsdiSHGdxMoqu0t9eVB6nyw5ewmkV7TiWJF+Bs4txgbYApcXXpZ9UbtOvBT7zsZiGxcZyDAwEsbWim5sfiE/9M/opcApGoPxuLkoXIlrASvfFkhz2JiJfreePoR5z6pyXoqcp3E5X+4aX4zdEB7UKukCtrZTOEDuBz5g09iux3/zm+4FAa19ttvObaWnEexqsu24ce4K+aq/KAB6g56UGG9SN5JS7K/pHcQ2jnfraUsSrFy28gCZvNGMiTy2JJDGLnE/ImL81+xNNiw3mbHcB/REaCE3nXHebqDYp96HsC5pHUPim52k3M7r8NyG1+iRpEgPkxfGDAls4gAAQABJREFUpHXsIRe03+orl7izPC0XpXs1xtxoslvPFvENTaKn6Usc2iOLbuXoEZYrC0C/RDdlh73xjW6c2jhA7wbgU+8Buumdivk98SSGmz0/jyDTjpjXLwTQLkfYJuNldIvDusabarMvs+pdj4aWoug/PYl3SSsNWtaHkfyLQrWMX6usS4qUlUoLlBboKwusC+Dc25bVMs1dNnc2aXeTvg6Ac/YCHyeQBRgFlLJqab7npNG3TaB8iC7+9wmYf4UXOhW7VbqAKkT4QZcm0bV85CqjI7/0qBAgrQ8XCfS1ym3Cr563V7LKnjX5g0AAC6uFzPXE0rMiHSojtTKM+4pfsVcZvPDAbzGYrBIDM5JAdV8c8bMDzPfkavCk5J0qN4aKgGWTXtxjJZp+Axg4zAbEH9RLg9/XThcNA+nomnUARAAmHDxtsEBaOl8pV5TLTjrJU38icD5dNw5VAT4dL+NKoIDP/RF6kdK/E0B7hLBdZd+hFVHCCfIBxt2DMFDnwWLtbOJX0Q0cic5+9OcFK/LjBPJ/Ln9wAPte8tO+AVeXuB1eggzbYnvEJCDT9DBi0I4v09gC7vAfH68bqh9rhf5aVmuNj9hsZTSTRYx86BbgJdi5EuWqbR2dzFFJLPOl2JZsDXgsu8ZYm7Gtk3EK+xPLWQSgj8NmuqmaHX+dczM94aha7TamOF4f22WkfZ9EP/D1r/fg/Gd6gvI+3TTFP0L3K+2E4wE6ulh/SRPMXmEeOnn6QjB7hfWhK89uPbj1HC6Afrh2OyIAzl/R1pReBnU4LCjNS9kv6bfFUw7/7gTyY9tsGj/lmcuTBXRFB6tvukInbYe1YbG11UNxFj6lKY9ROY9Sgbkyr06KtWa2yeyQ4urYYoqhodkcJRraRimstEBpgX5rgXUGnGsEKgKZTVpRs7hJu5UUPXpiANmtBbeWKfLxZT9w8vYRItw7OADozaysa9X2G0p/edo0p+1QXNuSZf5F14peePWAh11puN/gYEm7lUNJf0HWQoxkNG0rX1RAGiuOXNw4uFhzWD6kxfSKHoE3a3eVpilbu8pG2jFjsNwPcKfx7cX14fXL+Iq58Qnl6aaBvL9wAu4B/Ir/It3O0JgsEshsVhsD4hsUblTswB7Yhn3g+VgTfvoND1wHDYAQG1jBX9kCablE/Fjb57HfNYHt8YSAIlchu5YCcsR3r/x7X9FNEW5VF/GSZQwmt9eq918uusjtx3aFtKNjVAwG5wJEY76DtHqeuLjEfPDeeP757gJtf8fXXOFlz/Bn4w88LQB8iv5M7Ac9Ua4N/6MdPKDtrRc5D9x556g31OUwuaY7edq3ONbln/K1Jpz5P//jtuDJgcpHaFy+ppcjz2NrP5MTyoxpy2JbjRYYHMVqNna0I9ImatNoxKE+yv/riSc857vk2nMk/UG22jpeLkE36GXWwZzPtE09qxunn5Bblu1M8lF98XUw557KTpEPfxLgVf2l+l2xGk54GwBYNPjfphczfYj5aN/GbDE3AHFfh4l3a3OpgYb9pP/y2JWMHX+Svof9RHfyOhJ76R0Mby8bj7jP7OZC+J7eVSHcwO5C1Lcj1sXn4zr3cmOucI5ekN2Ic00y36mbwn3Z9UfhId4liNv39SAiLx7/5JywNmLbwpbY22fW/j8tjUD/Rc2k0zI7+Mk2u6iklhYoLbB2WGBdAud+xFhBt6A5rjl3AjSmno2Pl1vDZG3HZh8g8mAcAKFgq8dtulC/uv4o913p619R1EWzTaCsMnKEa31RriwLF7jKOK1Cx6thEUhWx4SJfbC5XBfVyvojXfPOu7i2edq1RVvl2UpazFnNTz1A9rD1XBM+rIMErvwFW8BD4EwvKbXXtzZQvVV1vM9LLBUZdkEHpEMWPyQyryp9nmSfL+A3gfHhZTcBAVbCsIEd5DcSiD9DoPBL2rWELRu7HUwviwEgBnAMnFgjABiB8Ve0GrkNvt8aJ+/DK72q7AifANkSHd8VmL9QWxF+Ui4sJwoQsoq+BS5CCiPl3rNr/En1B+UeAZi+/oIL3B/1IiQru+y5ngR0kdyv6UnLUVo95bhQrjYPqN4IycEvmfAnbbsIHzcHlO2qm6qbdTPwmEDqduyIYsHAF7EfiLiAvtOW9SmOv6OdRd4jMLy3bhqmaveTR/XS8A5xm9T8jwD0Laz8mx2DdmbEgJebjXnaBeYSrf5/+sorIztb27QJiKW9MMT9/oVe7jxbe8mzk8tN2rlmqmTyoSb/hED839BOKmew3aO1T2znnfp41S23uI9pX+/3aAyOFjB9WSvO480NhfZszFXv1/Lxv/Cd73TnHnWU9/UfppsKa8erFtvn3/He9KfLB32CxhR/9t10o+1XqU0mfZLM52MbvPeAA9xhu+3mNpf8JZy/2D/kVXpGfLPl7aWXOi/RnvGf/ulPPRuyfi1bXK5dnngaMk9+9H57xRiI+36YTGrENrhcMo5R37edMME9+8tf+o9gTdYTO8JdAu+/4EaTeiaHAvL0lcPsA80ObMxBsDjK9c5fO0dTrXmN0udRiqdIlvkmKzC7FQpU7+ujkKIlU2mB0gL9zgLrHDjXCDQNHp4clUHDXLNWZpsGyVVk8DDXNmioYqWHDHbNAowDB2hFe8BwreoKoA6JXvhr5CC+Q6uq7FBiHyFipZhV43DlvE2ge6GA6wWKHwXY6SueFQH6pm22dZXNxrqmSRNdZfwW2nVljlt9/30C7i/pYiqACMjn4sxqtQUuOLjGaPW7wk4vrKRDgy88oNmxwYa6EVgvugDLTcaTB2n3mzYBOT5YZHy0Q5oQr5YnMqElq+boFelWIZYbBz7zr8rmF6j+M0o3qZ9NouPqY7bANhxDBUZHqxyQTr5bwUCFAQ0DHoARAyaAbQX/KXbSrJbrmCUQNYtVakBWTAOkeD7LKwaIfkmAaIH8zDfRjRbgfLnk/ESA6GBtFWirlmdrG8ZbtdsOYPBordYCzj8jUMZKvZeJPqr3se98x53yla+4R6dN8/tn76MVUMD5f+W3/l5th3c3W+Shp45z9QGaR/jQjgLg/LdyfblOq69eXgi+kK3g6db3WIbJulsv6L5DNw8PCIgDXAyc3yX6W3WTcQs7vhiIMxlx/r+qc4k+irQMuxCgm3xlk/4BZjkoy6AfoxdUbfV4kp5CAJqnCfh+TLY7QzdsHiTSr3A84/QnZIvfqO8E9h0HnH9ONxqvmvtLYI8v6eNM7PZCwCVmqfR+r8C/1xN58VhcLdB/OR8MUmC8GLf71der5QKV9Ck+Fy7XOfAnvkCrMErvDPhzhr7KFondY15vL429d4miAvYy2yheLp1/9cc/UuK3VlxNmZ2vsc2TfGznv8st5p1yg3pA7xDwlVoD57+UrkfLJSfRB1myhdcJm1A/LTu0sdnaa9Mzf5hV+uLI603lgs9/3t8E5DEYXdNbt8N2uiOdGv+IQ2GrNNCr4x9uSLe0f9lAmQeHH2qkMi4tUFpgDbHAugjOGZrDLruhaoQG6AVHvi7a2ha9QNXsAadWb/USZItWgvHikA+MPiTj3O/PO7Kqbncyu+jlrlNOOcUDTvM7Z6WYYCs3bbqQrhBA+NC06e7VAfJD33ob16bdOgDCTVO2EhDx3PHVS/q/PFcXU11QV6tgqHzQ2f4QEO75oksKoLht8SLXKnDJlokJqPYt+8ZdZegw3bQMcltol5I5AkHROrXq4zIjkO53bwEIcNXkYg3QXrki2nLR5HDh9gGmOI1t/aq78t7OyqvPfrtGAa226c+7QQIfV8i3d6SAQVPsd2zXGvzT8Utnm8mlAq5/kf/3b+I9o+PG6osCHfwNDTc13DCEBy5GrOqLtprxgcdufsgjIx63Zuopj8920r9Yo2G6EZwo1xxeKMSP+DXcPhIbtas9Ue4Rm+hm7DnZg20dzcXFy4QtqIM8Xs6crhdn+XR9Xth+wgS3UK42L4jPn9/Sz+86gyx0VeyxhOKkHYSZfcJYZK+jXJJmayvO51nt5VxATiwr1DGUgX3G65xipZmXWSnjiRFhNboE7fh+y65en9i+nlF/2C1logD6Aq2CP6kblaTtsH2TRV0bM9rn5V7Vna5zf7qehLyi8wegfzhfEgVABzbBR30jgen/8NVYbIRMbER/g8BXRCdL7quyMV8e9buLqDzBT4FeG0ge7T2H3ZCJfsiEB/mEWHdsg67eXvFuK/ByPKQV8ddrtf6tcvm6jScX1AevEXNYSNtB7U3Uh5RGa16ZqvPQu1TBSx1kq2/NxJJVBfwNpBOH4231qNND4dOf/3ymZM4nbuLTYbJuWB8JX2ZOMxTMV49yeyXejS8U4uEsxJvLJMNmyYGWRc+VUxaUFigtsEZYYF0F5wxOm4BSGLQMIfjIK4wCCpoLW3VB0+XSLwKDRfUZUYGzgaI37gLEFzJPPvlkYefhfhWYi4y5s6AbgHSVVlL1VRr3lVkvuubJW7qm5fI5R1PRKhvJBxhfby4UrHjpZqJNj7rbuIirbhM+2gJQvkwX+QovktrFXxdU9n1vkXvAKoHhNoFPuyHYSHU222SMPFQqbqVuWobpAjBQdYewIs41Wy99rmgZ7JaqvVcF8herzdWssEn/ZrVZIa3gATUr5lxApI9XlDQ6hAAd4KQV6NZ//SvSVbqt0srm1wRiPq3VxBblW+RTbTcuxMg2Wx0gdwFWsu/kpcjuBvTkAHBwAEJicOMv1OQN6BEDrCi3WOkEkMX1rD6qLZZtHuFFPoK3SZT0afjj8JxcUZ4Lvrzp26YsXUckz8u2l7WCZD+KK1McPBC0vlp/FXuAbHR4rQ9hOqahn9cxqJ/YLZSRqsu54uuFNsOuxmex2vFU08HiiNPNEbieo5uDZLxCPUgTiKln6Zhnum58pnMzwxhaOTzoAfg0WToHZumGZpb4jZbYyGTG8VzxcXg+1eclXksnMeeU6PN1Y6ZfaRSU9zItb/rE/V2t+DkWT+M8bO/WR6H21lM3wPkDcmO6jT3j0d3OWeK4LS/W6hLH5+1zetqSyLW2TWfJ8jcgZg/iMG3yrQ2rZ3J6II5HsYNk6Jll0imT3kFCbQLTa1ZoqbX/eFaFbtFsANNC8uhpvjJfWqC0wBpjgXUZnDNIA/RSaBgqbStjiC4gK8RbERBnemf3RdLNbqC2YmSq1oWvAYGXQNmxxcC5vQRqolkhXqnV6yatjH5BwOoR7XAySHucjxmwoZujO4bVPAaXm4v8b3yVyjC55bBiPlD90oFv+WqtKjYJuDeNlt84F1eCLlrUGCHgzItnA7WS+dRri9yyRdozXWXNoi0evp57lAvvKvra5nYUkH/Gg27JJ6hssK4Lg+X+M1JgfpxuFlhte1n0V5Ytdyv9ZVHWA5yrfpsH40pyLbHgwZkyejTRNm++a9UHkvyNhED+cPlL43rzlG4APiUwe6mA+ir01sqkgXQP/lWdmwoOtl+cKsAxGyDV1aA2sE9yYAN0Jjb7Idt4oNOPAGh6/jAPPzI40gE5tUKtOqYD9bPkpOum81bfYvpisoxG3uoR2xHSjddi5FiaOC9QBm8oP5Qbpq1di9Myw/YsbTwm3+hhu1ZmMXUMhBqfxel+hfKy0iF/Ok07VsfSxGGwvubEnzrlFPc6gXPCl3/4w+TG1utPe3bQDiGUQx/Jp89T+EwveJBBnE5b3nitDer3ZEDnrGB9S5fl0dN8neTzzuJeXUGn61ndz6N30qeyuLRAaYF+aoF1HZwzLGNYWQ5Ck1aFWRDxK+h+SVoXJ4Fx1tHZ3rsiWLtCrh0rtODWiHCIVsAmTJjgXVvwoQZ4cgDM/SGg2iIdvyOQ/aj4Kptv4VboQjhfOo6Rf/yLA7Sa7y+MmqH1v/X5F3QhZRVbvuUC9bwEquflEf5RHVbXtTGiG62PCg1RfqHamaML7ULcVSS/6ZX5cnlZIplaHR8C2I9WwdX9KHCxtoxoy8S3TIB5QUwDio/SytxY9WGFXGoWSPYSdtTQynuFC7rajNazVBlgoNX4tpmzXOsL0yP/7XjVcviWk13LhEluoW5C2vQ58ucffNB9UU87LpK7C18XHaTDQDpPHFjlIw9gZ//4L7P1XncDdg0P+o4NOehLGIzPyomhWR7eME2e8nQIafBnhZCHtB3whmXkTYZvO8hTZiGszzim88YXxvAg02I//tDEJJo166tUZUSBx474vPF8/DF5xEmAWQGS74fyocwwDVPMXqVfWI8nQKYvsc5hHyl5T/wlTU/Dnw09GHeLLU3ejpBm6TAO09RhO1JigsmwtCfGf6xfoe6p9CxtM/kfuW/cJN/x6+UD73WlvfRh8kOZ/P7IWxy2bXql5ZDn3E/Tjd/6FcpqcNqGNy0WelZZHj1dv7M8c1tWKL6CzgpFtwMyslThhMqiW4PxCWfZMi4tUFqg31qgBOfR0AxasqhqjHjZ0QN0fVEUsOdX0HUBB7JXyLvIx3FAvGJdVbnOzCT5Rh6unSh40RFwbq4ttiq8ShdPXgq9Xb6xdwBABc79IrRWpAHpL+tCv6nA6WytoLcybXNx1Cp/q15M8xdd+eY2ayu9yjD5neuCOnjFcrepQP1Q8b4kec+rvm5HVA/Fo/m7iRsWAXufXSV3GYKuyYQKIJ4Lsw8RfwI0YmqreOa1rnLz1Aar6xsKrG+kdmar3krdTAD48Q6qeiosn3U+dsSuM63asYSXRFu1VeRrS5e4Ck8CxmzqKvvsp9X8Ve5qucC8Tz6+q+S+M0D9BZTb6jkxtttG71EdfPDB7naBlh4N2NsOGiJNAPQQLB/lor+d0cJyk5NVH77wsPHPqo+c+PCamVxi47fY2rKykJcy8gjxsZcW1fD8UdK/ABzqFpOTKKxraeLcENo1TiM/XcdkeTmS5/ukOKTrfBnD+a2wUudk9NVWbMlNbMUddp5e1I0Dv/dIBm3GaaMR81uwPOkCh/9th/Wob6EqHRNN95z4rXzMyuoRp3UwmvEgFlkEA+YmO6JGf+G3w/QNZYdyjS+s36PpPBwKPauM/mbR61OyjYkrIxReQcfe3Q2MVZYcHvHifpkXGKMylBYoLdD/LVCC8/Yx+tmVV7RnOknZ/NymCbKZFy67EXBtwe98PbltANAB57wExgWclXPCKpXhUvIjPmkv3/DW++51TXqZVI3rIqun2QIVL69qc+MEZmdoRZmVdD4c5C/ArEQLxK4WWG8aO04vWy72e0MvkSvL8wLRVcCcudtP4PEkbn7hyZyuBGm/ohgD9FhH9PQh4VWO66Ha0K7sbqb4humGYpx2ipkv//FXh0g/AW0P0qmIzqM31k4643zFIXphbYleVlumflS0OwwBX/Y2vRTb9tB/3M2vvOomTRjv3iTf9Ga9WNjCWMR2I7ZV9Xdpy8H/aq/ubrm6+NZr/DFgUyT2HcEwQfA2D/IkkWV0i1MsfjBY9fWBsQEcyo5Z/KFurByTJ/hYdU0l4/MyIqKxRhWsTkacMChBfdPD4rCctAm2NkNayJtXP+RPyzDZ4hnBb0HBf2nU6Iq/es5H3HEHHeyuuO437iPfvlyAJ7CLr6E/tG22MVpzzKci/3tApuzuh8LzxgV+POJVZlabgxVnP0asoNvvh3ZS/fQgPtDXN0/e0+I4ycfKmQzkkia2tLVBbHKpZjJCWizOR2E9kxnSQvlUoKwXQhY+pVnoWWV0L4ter6p53dOVoAYyrmqldwxU1WSZKS1QWmCNsUAJzquHqvKmt1URcMCIZlHWzAmW53odrdB6EMiU/NdrPEdX/uy///5uwoQJfr/z0O/cAPpSAfJlAvGXsH1afHFs0+4RrWzjx4uc7HOuleTlckPRK25uc7msvCDg24pPPVcjXhblyqSX51rlgrJUYGWpXuKs6EXQ5slbeWBRdQGns77j8TVEwMMHo0mHSqsuRYANQlwcpQUGfJCQRA5pMen/YsXPKR6llfLNdTMxc4V2X1EB6tG3tma5pixZ6sbqRmXRxElu6YZyzRmxvsrEoD6tvuduub9olxN2+hAo+MbD892U/fZzG3JjI3uEwNzcXHCDebf2G/8mX3TsakDB9IFtw0M3BVV5+ClP10MHaGFgXAnElra8L9Afq2Lliu1G0bMEdAmxWlHsdZAIqePlIMvAqOlnNaBbSOsJ3WgWh7S4XtUNgulFGemsetBCeiwniUyGxXmyvIxAVixz5h9uc0P0ZOqgD3/I3fGwnswQVMZKeZIOxyqi+r/JEx7aDg/jAZwSfLNKmw7Q/G+HeoBk/V4s5reDrDhugy/dN0SK7EOgJ/ITnaDbYbwmhzgEzpZHoPGEcqFbnnQY4Lc6ls6KqWN8Yf21Ls0PqWNgkaBQsEtKIeY8Jhv4VLk/qfMGMsVbZksLlBbofxYowXnGmCzRlxqDYNc7SGHa8tAEkbSTYMFJmYqpwOr5EUcc4V8MtQ8SASzN7xzHkmatnn9bH5lZykuZdgEQ6G5jlw7l2557zjkB9MrI9d1SvTj6ko7N9WLm1Pv/5ZxAeHLRlRz/ldB4R5c27bjRxl7m7F4j8BJdzAESKKne+QtwnPZRbAXfcf0xYBKTYUlApLeYwAMyFHlkKHTYppXzinziFwwf5hZOf8FtoQ+i4PKyDPCiGwuuLWNWL3eLWGEXsOarrk67wnh1pj6rJwHzohuOABx8STu1fOOAA7Sb4wrXIjog3VbSbRV9V+1FveWWW7pndWNTVwivgZZmDOwAlOuJhxqMDqNbHNahYcunlQj644vIR4k4jiJMGY2LyuFhDDj/iAHWAD1Fni+sCYHT1Mf6g37ooji5npMnhDp6muhxUVJufJ4Q1yGd6G0FObSwLVjTeatu8sI4TId1LW36W2yyiHVT6IInXp+75irH4ff2pkx1DPxyk0G6w80G7ftDNiTGp8wO2iR4usbE6+AJEPVft6OAdA/UFce+7b6NNEinmgKifDDZGozwxiLU2fN53ZTysemaiiOJ7X8T2SKFaThMgaw4i9YutedTaV3jFrFPYqOUFnn0FFvNbHgPGzJ271lqKKlMlxYoLbBOWqAE59nDXlkmIEhIwEhyZYzo/q/RYIMRgK4LexfDO/XVQD6uAzhn9dxWfW31fLlWhh8UoH5Arh4eBOZddNlKUaCWheZl+uqkNnbzezML9kbB73ku3eM9po28+pmn/Qp1ZYz8vrW9orZGiS/IccwF0LdJjfa+s+LnH7+boORCLYJdNGFPbEl1udMIbDfpK6dty1a5lS/Pdc9qj/SJEya6lwXOF8oFB5/42dJxNVvlATrDgzZs5ZF0XDZd29P93zPPuMMmT3YDZAN2j+EijC2JuQliFf3UU091F+iDOnUH+mOHAW8D5BbngXTqGRhWw6P0LsAk7Yv9ksZ0Bn20QH/sUJUkrWQCECn3IeAVMKwA8nTzs9NWU7T934tujnbr8UMV83tAktIfm0zQjRxfJn982rSgf0FfVWeUzolJm42N9NV4eTuk0Qmy47CVXKgGyhaPTnvOSNmx6nhenfOPao97HwI5VmnD9Ua4LfXewXR9ZOtFvbTsx5xCs5UxKj9eOxNtrHcXpullyXnc1Jk8i+ENAbroz8x50SQkwD0BcJLJ3uQT1f6cBa+0j1fSdjwO5qai83HHCRPdPOkZbcEIgOcQ6AfAYyYfUS8A6cjjXCZW8H/jNHmq+b9RscoRElF9LHqiszhjtkiely2KySO2tJcb/DGZAakqGdazdDquqrDuZVrCgeiV7mcNGrQseq8oVDZSWqC0QFctUILzfMutfE2rs1XBLnURFI9yRosuhGwbyGptV8IogYmDDjqo6sVQ5nd2IVmp1fLFAk/L5MJyxW23tV9UuSDaRdEaFY8HgaywC8jzEZHF7JbCSjmgm7k6/hJhRS+jNgmYJaARWdK/jXL4PHAI2giAQ4wcfKseFAKWLWReD7AVMhUhVy/TNsnv3ecFlJp3eJ2nTxPAXu/F2a5Jq+OL5YKjLw21A5YYhBsY7xCjg3h++sgjbncB39ECh1pz94CFcbGXbXkiMXHiRLf77ru7f7G3etFg/SK2Q+MyQCv7s/RUY4iA7rmXXeZ+eOONyUr6he9/v7vgxBPdQ9oKcx99SZN6m+iF268rfdxb3pK0fKd0/qI+KnOL16fNDdGYzb35t778jad/wH/Yhgx1fnje+e6ZGTPczie9TxaNxufVP/3V9/Poj37YXf2FLyYvPH7r6qvcxy77otqNm4r1Bowz7p8768PutLe/022k848wXYD2q7+4xn3v5huSPo7Rk5WviO/YAw6Mheiz748+4i795c/crTyZQabCTz9xgTt6r33cr+74i+OjPEe88U2ezoeUzv2+vtD5t7/6vOf95KfyeX/4Xfebf/49kbvJ+qPc1077oHuXXgi2cOt9/9Jn7X/s/v3sMzpvIhsQH7HHnu6C977P7bbNtp6V/dx//IffuY9+79vaFVR7ll97g3dvofDmL3zJPS+w//ozT/O8V3/8fHek6v/ktlvcuT/+ftL+aD2N+uqpp7tj993f8/HnrscedZf+5lp364PtHy1acP3/+fLjvvBZ972PfNx/HArC7XLF+thXL3VPoqs+albBZx2QLrW934o3nzL4sPDbUNwmXQlREXSf9X9sVd+XY3tYiT1bFEeMcX0yso0XYbaCxip9XoCvs5DmSec7q9/o8vg87CC2Fj2vrIOQfIIfo4xi/cKKBQR096AlGkwfReVSvwylBUoL9A8LlOC8k3FYslAuIcGxlPRrntZmdGj+iOhuWZzvRHRW8V577eWGyR/cVs8BlAB0wCTAolWr59cKxC3F1xzwrVVgfwBKLS9Q2rTPvq75kMNcZcLEyP2Dfb9feCHigU/8TVqlbxIgbpo4ybWxV7racuykwsVqqeRrb3E+aOSBOyuC/lA7tFWVjmmACePz6RQdmgEDWy1cIV3QhzJi3RS0yuVk9d13uQVy1/EfQeFGwbdpbadis0E6lrzv3X23vnQ61C2XfGyILVlFB6SzMw4v4O4nf/XCAdsQiDligEvMrh+/1lZ2Q/Xk40hANzdErKIrPnzvvd1QAfcb/vnPiK4bqJv0uXkD58/ypUiFvXbYwd108cVu1+23S/iox+FlsTuQ3DHaJNfTpIP/AiztMH4K0G/+5rfdcPXtJe3wQ3hq+jStjIsXfg7SrHrr+N8PnukuOPUDHpwv1o3Qa3KBGq8PSX3r3E+4w/faR+5HcjNSH66/5LIEnD87O9J3z+13cNdfhL7ba0cdbd3JIVsMlW1PPuStHpw/OXOG14Evnl4lQD5lwgS5KYmPoxavgPJW8CJTLwRf/78XJeD8nwLGuKAcutvu7jq1v8EGoxKZb5Au133+iwk4B3zzBc7TjzhSgPlj6otemmblPw5PSb/lOlcqukH0h+yD/hW5CSU0ld2g9g2cP6ubR8Ke223v9dpVOwMxDv6I69988aVulFbbZ8djcPAeb3KXffTjGifAuQ7pZOMQjUt0Sql6dMMlKM0uUf4Q+uYmzPKgcL5eXOGc1m+KOLqRjmJuln25/c4shj+uk/wWPWQXEE9+m91Mx3btq0jmqwvnome9dbL48/rbxJ1UkUOjG5wBXUz73nSxLu2XobRAaYF+YYESnBcYhmUC3eGxVI/JwzxpaP6Ad5GrLFssdw3R6gy4GBx55JHe95w07i0ASS7euI6wej5XQPU27T6SXEz9hVkXVGKFigBe0y5v0G4tQwV4l7mm1+3omg99q//KqGcQaHOLpJvcPjbAxUVfHF3974ddm/8CoueIgKBApt/aEH7mbd+O2iD2bcUXcX9xVz3R/OweAAEvzS768Ol/dJAIriERYwRI1ec2ffnRA1+AOe43umHx4BNZ6CPdkv5DI1g76CYf9spRR7vKnnu5R6Zs7Z4QyzLZERtiS256BgogA9C5Gdptt93cZLnC1BWwiR0aF6+v5P761lu9mMP22ceN0Q0Q4HzKxIluD4FGwg26YYB2ymGHuTcK1BHeKaC+1Qc+4Cafdqqbpi9MDpCu57zt7R4UA4yTwLmgvD9ok4AO0NU2h4XbdIOz0QH7uM0POcC957yPuR9e96vI5DEw94BQIHGQds85693v8dUuveonbtP/OdhtfPiB7tKfX+VO++qXtDL8L9c0sMWdfPgRbvdtotXoYy+72G135vvdtmec4qYJ/KLv2Ue9LQKn3EAA/ONw0GfOd6//8OmOmNAiHY/cc+8I9KteFe9nL3Cv/+iZ7qDPXZjwHvWmvTxAP/4tB7ndNZYzBHa3/cgZ7sCLP+02PfUEd9eTj7stNh7tzjzymETmWdKlSXa5+/FH3eST3+O2fv/x7h2XfNb96Nbfu9O/800PjPf4+NluKS9KK5x39ZVuj/M+kgDyRCfJ8ABddjrpwIN9+/Af9/XL3PbSYVv1a9rcOW6A+nT2EUdFvALpFv740ANu/InvdhPe9y73iR9c4cmH6YbH33Ro772KDt5VaWJMtJrOy7p2+J+Hfiz+FCNWbczq84r9KRfHgHZ+WB7A8zvkPOeHFv8WDagTw+cP4xOv3gKJ6iY3A3E+pie/LfuNpWNJ7FfBjFQ0RvmivDX48jC4/6mmV7Sz8gxyXx/9aiBLZUoLrKMWKMF5wYFfsUwr0OEhV4sVHNW0NtH8sVwvYAoYt60UT51hJ32SeyPtwQxwDHdu8e4tWi1sFWi/9t57hTbVNgcAFpARxG3acrH19ltd67/u89fhNl6gHDjYryIP3WKiGzh+i2jFXfVf1kr8KF2vW0Rr0q4v8iWJZAFycSnRB4n8C6XQ8WlmhZoVcsp9OqaRhpY+WPU2GmkAAnL8i28xP4BBu7d4ZMIXSQV2NkZH2udQn5v0ZdTxAtsVtk7cdz/XjIsDe1XT97D/pNVeRTcllU03cxU9GahM2tL9SF8ybZKcZdgQfRQAqOEq+r777lt8tLhIE8KLdQzS/yYXl38/+aQvPnL//X1/DtdTEcIt993nnmc1VcB0R72cSrhd+7pff+89flV8qm5Mvv3733v6blOmeD7vH+0p+qNVXOr6FxpJW1C6zZdx1Y/C9Xf8Odr7Xqpe96fbI1U9wlM5rhUAQh1v0A3dhnJDIfz4dzdqa06Nj4DjRdf8xF3zl9u9/ozJ62RHwh8fftDddN/drklAdNq8ue67t/7O098wGX3RT0dsn9/ed4/7x9OPC7g3/3/2vgPArqLq/7y3LdnsJpteSdlUSoDQuzSVqiggxQIIinxg+URUyoefn6ifivphRfSvFAWVJgjSVBBBaighlPSym7bJJtlks33f+/9+Z+bcd9/b+3bfJkuyyJ3k7sycOXPmzNz77vzuuWfmylML35CHX4YbCMIM+rmDxiOXF2hX6zz86kuOd/wEXL/FMnvSZM0/Nv9VWbYZYwi+xlS7POT5aPFPgI8yD5m1h/Le9a8nZVXDRqU9OPc5+dwvf6KgmMCYhwU9jRwP0jk2Xn+NmAd9b1xLDI/Ne0XufQm/QdCWbdogP3v0L0o/YOr0TP+VIvL7p56QxvZWSYL3dxxLH/jA5izoPA9oE+clyfbtgGr+ctKYejCv4N2rh8ip6fPKzzT4DIQrUCeYNlCOtIJ45rUe8gruNavYkLU1wQZ80PEJ5Y3eX2Oq2puD/egNfz5eDn3UUfiHiqjJjoZ8ZysffUfbi+vHIxCPQJ+OQAzOCx/OFN1YsgInPN6iw4E0BJCJPRMdsAI7Sq/+hnduIUBnoNWXB2zzshGv4Z8i+ONsHBV4DyZYhtU5jfppvIZPLVsmyb33lrEAYinM3nW0ngNwKZCdhK+OTpkiMwCQF2Obwk64EUgH3EywSNOBaPYCByd5PdgoAK7lvQ6laBc1VaYCcurBQD5LM9Y8dPfFmkBf0lzA2Io2wTMaDyfrFqKPANLJgw/B106HQ198cRTAdFJytqyEa0Ji9BgpgstIatFiScPVgW8DgvawT3pi7FjXBr+SChVW4s/iDS0yFTIqPEAnOGcgUKebC7/Yescdd+CZoPcPVtpH9o8H+vNHbH25z8yZ8gFY0W96+GE5+dBDta17/vUvN/bgm4CHDYZVXBPA8wkah6WWeYTd+ABC8MZzZYF8BMDsA9tiYD0Cb62N2NPXYwEjO6+ADeOusV6cIPPy8axc8MnQgoe8VQDcvDYIHtVcS7kEqIgnjHD6rtlU78rZDo7VXKSJMGE4tr4EENWg+uAy3Ia3SUzjHDAwzwCKkx9kQryqfyLgdXomZDz83xnOf8+xcvahR2iaf3j+GMYNHeZkoqMj8EDHsJoPp9p++DrUIq9EKE0xdr06kVro1QnaX83++zZd/9EGgvbf91sJ+LOxEdcleDkGm/HBs2aMMbd11D554K9PUQTmXNiLWI3clMNyMvKcYVhVpVA3qKqGcKxM2qQbc+S1S2REgovFLVhS5TDj5YSSvtFQGQqDdk1Qf4zt/OTqRnp3Zbn8vczbqcitZj+LXHqXvP/5dKH3hsATGCWHtCi6yc6nvJXHcTwC8Qi8/SMQg/NejjH22c4KvAFqwITqb2rBF+SYx5FIw6JpM57n7ikahgWDu+OrnubaQjcMWnvV9xyguwMT+0P8iqaBM86UuUe4DLuBpDz4G4g40dEpaxe8JbIZ20YS4O4BdwVYlZsA+lemWmUqAP0SWNU79bU4ZBuYo0xthz1IKxAfAt2qcFQSzKGM/t38cinT+9MFBaEFadKacdTBeg747QP15kSJLA+0m+JuNDjoK74GfVVL+eEAYXBDMdMhfaMHjhojEwDEVsGtgKA9iTcOKYD7NFx1khMnY1FrsyT4pVP0PY1FjoLdS9Lwp05iO8U7Aci/AnltsLKXQScGjjEffjjmBOl8g/EMXVB6E8ITvgcABOjfxOLPkwDMCcSPhVz6SytA97LNks9scEmFMvpRKZXnK5DP8gBwQbO+skbsl+8bzwVdF3jO9EJFXt0eMuKcjHDjSDuMyTpgDE3o+uEqX1fBPtPk8fVVX7YNxTxJuamHhS70XN4Qo/EyVpDvCS8tX6pfkDVW6y93idHxCbVHRXScgsFirYw+JkPbsHqIA51Z3zNZ/5U3+INCz+DOF/L83fig1mreJMATHnuqo5Z63lo4xgTonSDyvBKkU4QdSOp9hnm2xZjBpylL+X1MMnkMjGteSf68+H52LWdFBNTN1HEka4s5G0ovxjP0ryh02WYpRnpUWT56VuUCMnZqclkLt6Db6OZK6E2eMvgknxt4I4+iG19/PqOmYxzHI/BvPAIxOO/9yc32JefU5W7D3HyBgV9QztDc5JqiBV1NYSwrLOyHL4ASJNK9hdZdLmSkawuB3FYCdNAeg/uELpbkvZQH77k8UKZ5AM6smDwApU1YbLmNwBy8iTlzJAn3Dzi6O1mQTRBdg7amwjq7BFsdKkin2gQbvq2BuO9PApgeBL3qAerXwxq4DHXhEBGE/eDP/RLdYRBKwcejCrrtDh3YxnIsRMVO7SilXAwgk1ycyn3ZrQ+on9gdLgoDsShS2wcPEQrAy4bODpkKK/8gbPG3ja4iKE/O2Q8+67D8TqmWRBtcWLDzhtTWOD97jg10TMFn/wX0b+snP6k6DSLdB441/dE59tzNpdcAneMTDsgvwc4qD2Ifdrq2nHzIIVp6D/KbaOnHmBDw1PF8IIzjrinUh9cTxni830VlHcvVJSijaxXWFSh4BL0KY60B7alvMWjOx9iRITSgm2tRABIx9grXEG9pdG+IBuC6m4C3FWoRV5yAdtk0ASP+OYu8yFg8IKkO/vo3fesaNkEmxkLH1o8JdErSZSYINlY4b0qnkAxvwmiKHjO8XPC4vsGN13JsgfiJG//PSeTYsz0eHAf2GUc9+jQE4zMWY5nkGJIvN7CPnk75SXsQ1747fvaHelLyBvSPgTJ1tyLlExmPnWUY6rZsdvSctoLFm9ZPMmvbLmIW4nFd+DxjBenUD3RTnTwMlreYNF/Gn4k2zzzLeXgxmeouZQ8hOtQZEYF4JkwMinMyyFIu5ffHwN9YVKDSUWWkRdGjZHRD48N+VKAHnxRycMB39RHVgZgWj0A8Am/vCMTgfDvH126YOtl56xpmQlondRpAOSdGxZBognMALXnBa/ACmz0Ou34QnBMshvc9517drZg8Xq6pce4XAJrBjiYGTnJpzPuyBIEcAbD3z9YZWBeQwqZNdxb1Ke+UZrRTA9BdjUV+RQTGoV1aJsBavQd0o4vNqwCZK2Bpb4A8bl1n7RhIsrgNOjRCZi1kzoMvex3qToPs3QjEqYROZojRt2HTpssQ+CWnseNFAospE3BTwSjSxO3cbdCe8kPe8i1bZQJdJeg3zfb5MSbsi803BPQLTh54gPNPp4833V3gCiMEvdDnH69j5w/I5JjywYfnyHZ04bgfCZcU7p7TY8gzEauOLMNBKzrDz//zPzW+58kn/XnDAwnafxl7tDO8Hw9mH8QiVdJ2Q18uPfEkpT/Htx2g0eVmkd/h5UNw+aEP/0CM2YewDaAFA5gO4Dqq7tQB0JnAQ42WA2gyJo/GCuA75eXX5+HBwYH0C078AHAErnGMzTXnni8fOepY5SdInbd0oQp+7777ywf2Pwg80HdolVz8vpOV/sKit9AWdkJhmzwvCLo4UXUAXcsi6CHeJK5HPXJ4k8jPXYzxQDj9oMPklL33FdJ4nHvI4fL7z39ZygFqk9rXDnlhwRvKe8ahR8pYuPAQfJ845wD53gUXa5p51m1pa1W+3YbjoQP54AjpRBrlzlvi+7/3fvIBLMJm/Yk4Xxcff6LKeJH9931VAv4wn0yzLcaZB5UkHwgw/kftd6Bcfcnn5epLv6iuL3xT4N4WuFjvJbjJ8I0F8aO7t/jY01mmdLbHe4/PKz/S/Bnhv5ZpmnkjIMGkBp/QMhIsn0kGNOUnPahslP4RU63eHNS6N/z5ePNh8OI0z8bOCjwrUWcmH31n6RW3E49APAKRIxCD88hhKYhIt4nc4NxXeJu2AFCGQEsbU2lM3vmsKcqY84egcCZ8lg2cEziyPi3oBJP0J3+OO7cgrSCQ9QkiPBjU2KznpFmaYBOAOG0fv8E8obfu8FaI1Fgt1SlpRlyLNszdhfRq7PIBr1l5FVsuKsSgfAaLXc79pU48bC4gj85NKWmApbwB/RmOvszEVo6LAcY6UTwCYKVq3FhZDOttEb50CsGSBiBNw4Ksvune8s8+FR16mHTCF3oL0kPRDjztne7052a7nGbhvpM88yMAh5ADnaln2o/d46+8IqcecIC6m3BcaT23txX0+ecD0gwsznwVC20LCuwfD+s3Y5//46OPyg2XXy5VeOiohx73PPGEQwH0NYbwXz/4gHzmxBNlf7R3z9XXyFt4AJvFvegReO5/cu89ON94gEL6ziefkKvOPlf+87QPy1lYIDsILjm0EDOwnwH4BRC0oECcedWJwNzrBnUVxfnT1IbFzjfe+Vu58pP/IVedf7H8xxnnavtD8dDDsBVbij4691m57ZE/y0XvP1XmTJspd1xxrSysXSkzJkxUHup741/uAbjGQx87x7YQFKBjkWQQjM4HBfIyGA1xopP1IYCHpzMm/c6n/iafwcPAgVNnyh++cJUsgyV9WEWlDCl34/Cdj10oX7gJlnXo8osH75KzjjoOWyDuLYt+facsXbNKqseO1+YqcI4v+8l3NL1odY0cNHNP+cVnvyJfPO0sOehz5yk9aJt64rdMfW7924Ny4XtPljlTZ8gdX7xGFqLujHGZ8/XzB+8GEIf+aF8PSCIoJ5BP47rXxdFOOobIvVngPvhXXvx5pd50yy+kHTtB6enB075atulvRMSt5xBJlnJ8GZQxJzZ6iKxD6VWiEYH1rapjx/VInREKsqazfceudfrlH3Y6KpDeXVlUnV7QwvvSh6vpLZAQvacjXGl7072ZeLa3jbhePALxCPTNCMTgfMfGka/IFWggtnQSE5rRcmMFFGiS9EIDQaHt3EKLLgE6LbwE6I046M89l4tDOVHbwUk1nGY+h5YkiKNbBQECrH3J9xwticlTXB7gI8NPAAHZqN8MXlrSp8KiXA13EvpOvw63k06THY6Z7u7gAASTORMJqcfDQQ2/FFpaJuMAkKsI1rc0SurlV6Tzz/fj+LOknnhc0i+/JLJ8uS54Vb95WJLTdJ/Bwrs6yBiFhYzYX5gtoA1OvBg3NsY0kL/OU3TjqcMCVPq4o3/cQaUe47ENaZbbXMYxJ0CnL/qesOB3G9hfhqh+cww51jhaoe8fANIZ7nn8cXwoCkAVbx0SfJOBtwmC/GlXfkXuRBmDgfPn33xTPvxfV8sL8+eBt1WB7Hduu1lue/Rh5Rs3fLjugX/eN/9bzw31SADIE/AqmAQXz5mznNOaTau200kt5wSdtOyGjm/fdIP84NabpAGW9CqAXoLztRs3yMXf/Zo89tw/VC5B8jn/c4Xc+9TfVQ8D53OxO8s5375KXn7zVQB07FgCQM52qANBqdJIx8GHBqXzt5RLy+X1Migrye1CO1rko9+9BttUPqHtT8F6BILzFQDqV9/8U3wA6XsKkCn3pbfmyUe/9VV5xVvdDZzfeN/v5XM3fMPxoT8/u+e3smLdapXHcVQdQedvV8cwR6dzv/1Vufdf7nwZOJ+LXWrO/d+r5eUFr2nf2X8Grc/zgjyBuz68oA2l8+2FPu6iHVwLPGx/8yRQNAFdEr5zdI1gnpiSNLOwBzHoZjHPisnLMhwE5Cxz9X2eClqZxmQqzJrOqlpXE1rNp+IIwxyJwRPXff/7/q7R/SDxc8c7GqZVV0sNb3g5oRM/yA7enPIEuxk+lTwqD0dMjkcgHoG+HIEYnO/4aA6avFeWEM5nmbsoc5yvHAVTqU67JdjujVazbUth9S4gnHvuuXLBBRfAE2OogkQCdC5m5Bc01wHovQJZ3/jRj5xlnC4iPGgl58E0Z1/LM4Y/dQKv9suxD/e2xYuVp4iuE3T1IECkvmo1Z+yAeYaWkiKQqwFWBwME06VFwTn7YfOHxTl92w/W4pe4SwyDogI38QcIw1ACdBwNd5exsGbOa2qWtuefw4LOda4eZZt80415plkfAJV9G33YYZLC9on12LGm8x9P6NdIE9OmS5r9Jz+tzwT12JYy/Sy2MSRgxDheCqv1cXvsIWP8wlC+teDcRJC0GdZ6+qBfeeWVTpfcv4Z6wuMNYK/ngDEPyNM8zsvLd92lu7mc+LnPyiP4Mqi7WiCUllG0qQAK2VE4L5PHj5f16Mty/wEgZabLg+qA/iCMw84u/DLna4sXAkSmsckLrZ98kPNuJQCUuPK0r518CECZPihi7Bhbe7oYkZJxft114+IKgPPJ4yfCB7pIXlu2SNGXulzoeQO/7/9I+KFPGgN94Ze9Yt0a1c2ssOwXPwqExvU3oJqDxsAHIQ3Ic1Elg9Igl1/MTHn5bKeI6JR08ODMu7Z9PGLIUOx9Ploa4Oq0eNVKd74pTw93Pas+yE+GnsPxBdCVa1djfN2OKxQTDmMhq7S4RFasBa5Bm6YndVSrqOnlz8bIKvR/9Fj1iw8APgTyOmK73IOdMTGRWuMx9rz20CPEOF+8NumShfOm7mTg4/lKgCewtoMvjUOve/5WLVg3PQnNuOATGpGHVMZM5OZJyqEru9L4R6v4P543IAbkUCLEo7V37Z9vX399pAJ8W8aF4blhEt5cLeR9cgdDJ6+TiIA7dIEhj4ACazu24GLNqcUfH2+icYhHIB6BXT4CMTjvm1PgIUWWMN6G3TTmyHZbxnSO+d1N8ClOrgWGahg9CBRpxTVwwMmeVvQO3FdfA+BWn2t+tIf3WB6caAjOLQ2f66IDD8bEizJsmbjblGptvWXmLLdLClxVdO90neyhPesxMGadIJ2WqQCvbbByL2xql2pYuJc2N3UF6a5G9l8ADAIRghwgFMhljMOAGbkBKoeDhkcIWYitFScDmCykwYeIQVEDeCxtserodV6JTRORX4t4zOzZ0rlwoVraU/AvF36lk+MCHRKjRztdyuDmQ7BKvQCEnoP7yrGox7E1oxHH3D5eRFejvIH6sD8MYd2oHw/fxlknnyxHwK+cWy3OhV6PwP+c14UGi3xMzLceu83wYDA2BfFKAM1fV2tX18o6HJoHjTuLqK85wTfPIXTguoCMpRzjAB49v6QH8pAiuMfn5lEJDRC0pPCB3M3yxqItyGI81CSLlRZcDQ2lzDea6foN62RjvXugMrijsjkmDH5sSHMQW6nujx/D3N8VeYvYeTvI7dMEvPrA5yTIxvXNOGD5hiwnh3104Njatnhl7VJZWeP0ym7T6wqZ69bWqOSgnO0huHa9TiR4en39GuHBoHW8KHsoYNu8tnQXHcTu2uD15s5RUoE3rkc8UPFaFvqpJ12Z7kuO3w53htI0GtCfEcRQFE+i/rTYuKc5OkYaeR1vqk9eBkvn5lFEkv1MM6yoAEFazddlt61tVvLkUAJJ46GgXR38eeqiBulRZfnoXQRsH6HgbRY5sH0RouSQFkXvi/ZiGfEIxCNQ+AjE4LzwseqJk5NjOGRnbdbDvY+TGm/0mFCJbXTmC1fsJs3t/QycU4bt3sLX4UmA9nncKvDUUyUFiyytwjpbcsbk5A7+BHYfSR5+JBAO3Dx0Jk1KBUDncriq8CucySmTRbC40i2spFXP663gAGnm/TEWH6Dhm9YVvp1aWPqqYeleCh0AKTJ1mc4NlOF10olQrehgsocCoIHhANCDcSwDX3pLgyyBhZsLWelzriGki+mkcVhXAmF81KeO205yK0mW8WhocDHK03hTkDztQ7Bqw0L+xnzdepFyXoSljKeHY2sg3R6KCNJpZZs+fbosWgQLclTI1c/apk5+or/qM5+R2f4rod/95U3u409a5gQyqX1CHFxPlvYEvZaYVjrGVa3liJmnDhoTdPsxJysAH8G4AnSCQU07HgXwWgdk1OI/taCncc2wD2rf5cjg8A9W+jEd8iGk0b5ea4yjAsnUi8HGyOUCfX02OtJBQZEfQ8fk2sym5VTv0ma0DoFuVt3qWbtGZxymBfr4fofKTESmKtr2fU/gmg8AO88R6RjnNH8LiPV88BGLi0cTiPWsoAyuLWRNcHsoNMnTiGIkEOPAfw2aZsboQUF+oK6yyOe7QkFBFgk97UpzDNRf738oY7epl9Zl3tfNJEDoJyHUvSyNSO+uLIt5OzL89USFwrdZjKrdW1pwweZUzEfPYYuz8QjEI/D2jUAMzvt2bDlPWtBJCX/0Jg+6gXfHAyppKE3CIpkWAOECAvc/Jzi3xYqsQnBG8Ejf8y2wZi+n7/W4CZI4+RRJc/FgTkiMn+CU4paFaHkAgXGqSFoIGjkrw99brci0LvODQLSasl+ccVnu03DOkNHQZQl3fdEy+KQD9NViF5VqLDhVkK6zNBijgq8TFJl5jjEaGY7dYCoB8Jbh4SENoNz5wvPKmoSvOBfCqvtNlPwwzdKI03iIUHDPNwsMnIMskLZkiSSOPV4S+Ex8+ve3W4n6opdj3DnGFgjOzYo+EotO8wJ0q8CYuvCgHI61D6uxB/s8+JL/6bFH5W58qMiBberGhzjj4pVCEuojoXTGvlj9jJkJCCEe1qEsPXFkcToQ9OUeyhfwO3nqra/AHPXgz+QAOuuyMZwbxKqzt547azvaITjXbjqlMn2hOq4fGiPLdoOAsizeoCCUCBh8h30+28UkxB9Osm3tI3T0seWz9LA6xmN5iwMdjMAY+oR18UUcfWoatOfp2q7p49tRUO5pXMdiIJ0Prlwwyt8g4zSROMsVnOOsYi2FNq0PRR64Z7rqVPP5ALwjr5c1KrJJvTaoKC91Ikjjp77sms8jcmnSyKYE9BGJfCCdIsKBumq9MHFXpP356tI06d2VdanQOwKHLCrsVAs6Tx6P3JCPnssX5+MRiEfg7RmBGJz3/biG7+dZ9zhkmPfzWNBwAKzUahyQ8yZGwK+Y4FwBEbgMnBM8tuFYq77EKMDOJolp00UINh97JEteAj656r6iyiakogT7WxOIs67SgF/oDyIAAEAASURBVKoGVQic2t0MChCggbMpO8A80mPhZrMZ9RpZT/VnOUE6thYHAKUlfZGB9ywNfIYgleiAbfKgfH16ScooAPBykJZTr0YsOuVOKeoPjyqwghfBt7zT/NdVL9e2yrA8ZTPNGEcaehbBf1t9fUmz9n2cgm97cs/ZkqDbygEHSvpfT2u9VXV1Ug1fbnMjIjDnuNOSznMxCr773QbTx3Sx/vpKJ551lrNOQ56dVwVDesFAfw4P62rwIIw05hnr4QhhmjIo2dVV8KVVCPRwEOjxUBTmYgfQXDmFqzwgLl18iJguFgq8Adi1cXwwJ0lAaH1iBUVoIPkYFA1kiQzWN8R5eaIqGrPF5GE6N291rR3mLW1xmGb84TjMZ3S2Q3pUe2Ga8SPuIsYIvB71x4WIvyXSfZlzrbJy0l06ATcXwGE8MIHGVJZJlucKZJZADkUZuA7AuS+n+77xsi/Ky98hxTKwm+DVehxeR9XiME3VRf1IkO7EOJEUYLK9rF0ZWX9ydSA9qiwfPbd+T/ms0xVi3rkWdDYcdbGSFkUPKarJfnQic1WL8/EIvFNHIAbnb8+ZS6u/ipOtty7chd0EionP3+05YSIHIxX+ws0kjRkypVavnnXi10NpQSdINFcLNwFTHjA1gWgDtgscMgRfAYVVeAbA5srlAhOvA6q456Y2bZDEgHHgpoYJbMFXLptYT3UHrbmFZMFWMQCOtKIjTz9YtbQDVEN/urWMgB6vYVGoAgidnVGXMY4mROukVSZChrm/QGJWAAsmfsr1c4G2n5JJAwbqFo7LuI0iLPGpJ/8BdxTv0uIlpPDwkIBsfvnT2tSY5dSBciNitbAanTxhPrjNpP76qCROOVWEHwx6Gj7qKG/g9ovQUfvp2yeQ5jkgQOdOLn/60598SU7EthisTabZXwYrUz1AA0DXwGLlQV2myccDaV43LiYP/vsji8ZrjgTwqhj8UT7m9Zw7egDOlY9lGA/WDNriFco29K+W0ZrOCzkA6pQNlfTi9u2YUupqobXwh4FifFCR1n+lUQiCj1yGefY3VDEoCPGGy3063xZ2Vj3zwOMpWboYVyiOKjddLWbbTFscqt4laXW8XLWSG5M97CJPNoJw/nXnBzkOOA7WUdcWcvg07zF6PliDwwZW1iTA1qEkL8Uhz58bk0GavEpwdXitMKvyeGkyQzlsA0kGKzea1demffvBcIDZk4KEllHIrgxUIiqQHlWWjx4loxtavm4XbEH3t4tumui5iF2PkkPlougmMZ/yVh7H8QjEI7B9IxCD8+0bt0JqYW+JLLYUJk5AXJ3JWML7Gnc9YUpX8WP2ww7fWFSZXY8cUcGAYWBpBROBI/3QOwHwFuAjP9jiAT7kALQE13A5ScLnPGW7DoA3DbCemDQZHySCfzot1VjUuYzbMmLhqAbsKhOEJljRudMIAwEkfM7p1z4UwJRfLG3TGZkTGTql/bLJLi0NKGffJ8HtRkE6ZQQzOPiYtjynbsggOG/ErhX1BK1m2iMP86GQhvU8CWs440CGycsXQwbdXICq3S4tlJfLy+0aDz5IZMxYSRx6qKT/+U95HWNzAhZxmg86q3H8bbEogXqPge0wMLa+WNt8OON+5zbxcyhwgJl/MCyMAbM8TSPPozSmyccJlWk8Q+mn4VkPDORxB6Ea014uZapc5MnKNCynBl4zsskPOfjrYpWip1zNtmzDlzkO/NUmXNtaxD9Kczq4NGhel4BH+ZRRSapDVqHPRBZAi6Cq0yiqakDTcQ1y3SQgtABxTkBYB6hj+oT1DYiooeVOfkC28wOC0tg202RmGudIH8qVD2nEDqijDD+TQA5l+yo+iTIIAE8CNyHlYxrXjaaNH7FeotSZDwtsk3IR6zUGEllJZtA0aSzXPP5CoKYdQfl8oUv3o7/5cCjpUWXsUhS9t13iuEWFwi3o4YsqSlIhNMowy0CYn1dEFN149IpBBjebOMQjEI9A34xADM77ZhzzSSn1H2yx8hTMiOq1oRMYIRBv7g4E8SafhoW4CCAZcM+qdBvTncKs5wSIYb9oSuAHdQSfsNcZl7Ms/suwEZI856OSoqsLF1dip5A0XDYSu+8ppXXrZNmSxdIxbhwmX0igGwm3dNPZFOligE/4ggu2KBSCYfJg28IRmKn1U/TU1u7VTGsP2Ut2OK1fE2UcgHTjZcyDOlImFr9NGlAujW0E52if4JwmWPrV8quh+DBPbuA2c+qmYrJMNmWGaToOjqb7iqM9tz0d5UOGlfs4/eQ/JXHWOSJHHi3yr39hhxp8HZJ1TD4UIZjmwXMxZsyYXNW65q0uY7bDwLlR9XSyNA+Su0pYjv8sN1o4zzQOV4aIJ9+xujSaUFcUkDm8yqd1eO0hq6DO6oDGMl6XIDleMLmkl4MydWVBMeSpjqjkNgoNAXFWc8KC+prw5CCt14nlfGxjFCY7NcIUl7Z2upYAKKIX+epF8JNkDyV5intNNgs+VekSPM3OrZarvk7pQHXy4TzpsOg59GkQ3FBZzO76Phs/qpIneO5HMc+70sgaBuq8HNkoD39p6k+SeZxz1tEHAMQkUa3coHSWsx0UOn1IRTBaJqtyPKNeLq4/jn2n/9UfSESrpEeV8aRG0SNEdEcK30/CfLzlxiEegXgE3mUjEIPzt/+Ed2CnkXBIYVY0gM6ZiF6jzHOy7NA/AMHJYumk5buAQIBu4JDsanVFrFZ0TBoLNmGXErqkpACqsVczvjCDHUzWi1Rgd5azzlbrdwpW4XRNrX4xtHX5cqz0HC2JA2A1JvIqBRDXfZcJ8iGYYJKAX2d3NogDrieDhlTKMj4M6KSLP4x19mc6+9jI3WHwEDIJLincGq8KaQ2QvR8eaJoAyGmJbwAQrufDASc/yuMffCAnTR3p554T6N6SgDU8y82FPGzfQDBjHp6mC0UBqtPU3coMpFs8D/7u2FqR7kGJOfvL/Bef120jcydUgnYePQJ0tm1IjWkG0w8uTmqEYjnHVvnIj/9aT7mZ0WKOibIqr7LpaSOwUhLEOWs88qRRDmPSEZRHZQFUq1peHseavDzCaVeBOA0F5NVKysc/5Ld6Qd4aYozgRPBvdtC6bMuCl2XZnuNQ3Szmrm1lFUdleqySr618wrrhtyLfpl5XOX1X1y+IDi4dlsOarVWRdpeRB+g8tyzAocCbMbPktzb8T4AFPIWszzLlB68S/HWispHWE8cYgVefXheadkVsg8E3oW2qbBBI0zoQFvCxPVYwAtPv4pAPhxeneQMsIBTG1b2g8GQS5sxHD/PE6XgE4hHomxGIwXnfjGNPUopKAHBDgVtGF2GSIyjnJheAn1IMsxb90rkVXbqsHFsjYmu/FgDGAoKBQsa591BOiq1cVEmAzVmQr6cJANMAxNw2sQgPAQC0yfe9DzMoFIOz43D4cje/+KK08gM9jfC15jaL2B89M4tCKgWHJtUi5JMAmM69BWVEWjqrk5HBM1sdxBuhVxm+NDoQes+HFd/qErAPgwvNUOwcU08g71CbE0Nx7dgCcc0a9Knr+CjYRl0F29o+m0ZjuUcIoBPoJ/iAYGA8D0hP33+/JC6+WOToo6X5+Wd1COxhKDz2dj6cwt38Nf2MhXn2Fe3bqOnuJ5qxgQMz8gaYWVUt316GYmVO0hTFQ9MOSFEMxSs9HIOZHKxEdjfcBN6en0QELvw0mhPiy1kVPOF6Kg7k8PWo5eRVOv9m+uTqkkSlWZYdgvJscuG5HRYQ0VTu+YtgCUjdtN9FDAl+aLLK8PMM8mQhjz83BPSWV0Bs9XGfsTrqc049UMbbAK8blimd/KQxz4NsuDnRVUYt7gTlRI+M2SZjhCiQ7uiZ00jRKhcyeWoDkO4yZNcQZH1CVWXlXRDsd53bdPh6Dpflo4d5Cknrh7YiGGFaiUM8AvEIvFtGIAbnO+9Md7YCCIeCvvL1EycXgnKu45c2aR1V6xYs3Kl2WHTb4Bu9g0EnGrqHqGXbz774VqROlcHsDA24pSD9pqFP6YiRUnrccdIEa3T6icexoHSlyKGHZQNiTqJ0c+G7VwDbQRC9lbM+DT0ql2kcOvuDVz9oQxraYodZH2EkfNHfwqLSNkUMjtaJ9Hq41VQBoHMv9kYF06jEwSEfngaSBx0sqb//zVUI/4UuCrYNgLPM9AnHVm4x+Zi2vMXhOvgQUPqG/5PEeedJ4tLLnKWe5TsSutSHPD61MeBcOCTFDGENAv64Ul4vlnc6MO8AOeIg3RM4pzwCb8ijbH+w6cDCjgzz2jZOr/Fo3vO7j+KwjIyOx5VTNyebeQbPkp32ZbnlUXmt2Os/box6Xa3PKuRvv8slgDYDmq8W5HPLgnIMINLGZ4CdYx3QfJp5rnkhANefHc49aV2AOtpK6Q0JCV5Q/N0aOLeY+uDE5lrSQaY6dsoDHUjPDaojiawQh8gRKLYfVmRpiNhXflmh32MgnbQoesAQJ+IRiEdgh0cgBuc7PIS9EpAkkA3d2ToJMDvc9KWWFwDZJP2qQSIoSsECXFRcim3IYfkuIKgMzHIWZ7ldkE7LMF1SitEAmyX4LCYYBbjmwd1YSlBAOkB6J3cooZUd2eR73y/pZUvAjz7AF9whNchAn9LLluJrm/C1xhdGEwDaxbCG64xfCmv0VvimwxUlAOb0qWDQpxMqAQ8b+JRzn/U26scbvyEJFgI5NAKkV0KfRvV/9/VZBnca+qAn4Oed5hdEw4GyKMdilin6AC0qZp/JyzjqyC3jgwy/OLrvfjhfkEl04YONv8VG7zGmnKiAMTDx2gr+2Pwb5FGP6SBPHuYJoBgzzwP5rjGuDdADMN6F1wFzlZVbhjwbcvJ57WXy2q5vT9Ms04Tx+zwijpUGi4w3w/KuTGVdEnrpZq4RK9NYy9wQhfOBW4uvyzIONeOAj+cIl70BdaT0v2Jx0PXa4M8CfPrQqK/8kNZ8KEYyEqRTHNrkKbWffZAHNTBIgM+C8lpmF8bUIyqQ3l1ZVJ3e0ILfQ04lziCFBftBFcYdzdWdjO7KoqXF1HgE4hEocARicF7gQPUhWxquHOGbun7+G7Mk/3Hy4+Ixfgww6cxZcG/BFovtAOetO25BB/yWMVj82cFFpwC7SQDtBFxZknBlSSKfwCzMrz1qGtZq8pBGN40xOIrLsH0jtgzshKtJ6bChwOXF2ASmU9a8Pl9WYSeTydgbvebZZ3Trwxq0NZjt4SuaI6ZMgdEerigwy+l2cYoMONtz1gbNI4WtXIDq08QHyPCPi2D5H4dFouP4kSRFkRhF6qjIISklHz5dXn7oL9JON5ickASAz8hlm/4gCGfaYgPyiAn4lU5azqELSEnjmwgsEpUnn5Tk//xPTqvbn6UFkiCHwUB4pDR/ITHiVKnTpWZ8nnQCKI0dcGZeebPibHDelSd/Xco2dxeqbHoE7Yb10XISEDyvJj0pTFOe8B/jCdN8upuiCO7+RfJXeLRSEYW8XHXwELu0q6pppblKzAdWcLBYnnWNbpZ15vlT47njXukK1JFxP0/n6mRt6Ysw8KWwv73zy0NdXmOUYbGKwzVDofzPE4SDYB//XTuMfR7JroF1yMzg06qf0VzJzvnLhnsbtqdOgW0UvM3idqjdRQXegKLkkBZF7yIgJsQjEI9Ar0cgBue9HrI+qVCk/gGZexsBeVJnP0xnmOCY5ytngmmCd26HpxOcr9eTEty1RbdUBIBkzECa0tHOGliZa7Zia0Te5WkJxwLUBF1TaCWndR+gXLdKZAwAPKqiUuM6PiQUwRrOOlhQCp8XTXNLxvR92OMbui5YuFDba0LdYixW7cAXMDfhA0IJuMkkTz+dHcKDBuQQEIcPIIRS9Hl3yKXPOd1aFEVQmkcGFZC5HO4v9fy6KScG6ObMeoiZrhoi6clTJD13LnzSV6setOQX8YGEPurUezD2fue2kLl7o1MXtoODLjHJykrpXLfO0cJ6htMcW+YZc6wB1rl2y8aa4MfOA2mFBnTf6U70gqBZ/DG60pDRPOmeKZxn2vJajHE3GvmzATjK/BAqjx9Wl/ZWc1wKQRllk0fbcHVd2tFde1bOmIyZvFPY5cmrZRaDzwKrRYV89CjedyLNX+6RqluZxrxcjcsnHB33C5aRhvMUgPAgDxrG1vGAl5c+rjXN8zL1snhe6IHG+xEXrgd0fym7HU59GWloqwtIRzV9UGM520TEYKdWdUSGebW6gxBY1Y1Za+zaP6Zvrhakd1eWy9/bPIc0KhS+zWJU7d7S9Acc0c189N7Kj/njEYhHIGsEYnCeNRw7NYMpEe2F73cZA4XOcZikrJR4lgAnFaL1pKwBRAOH5DeAqDs/YFElzMygAmxTFa5QpR86d3VhXs1piAkqAWrTnR3QBwhNP0REMIoybqeoQB6W+PJytwiT92sGxgCrCsxoYSZwrVkpqT/dK8mjjxYpxxdIaQWnL3wb9NDPG6b1K6f80uko7OSyhnuRqy74g75XYLeZgZjpAws7Rwh0Z4JzPLK5QRJTJksCFvv088/rh5gGoV45wEcdgHNi1Gi17Mv69ZKi1Zttr1jhdn+hLB7sM8E+LfkGwI3OsvBh5Z6G2hBBoOOAOfvPc2DnA8W9Dn5EM/VAiKR5okb84w89Jf68MNID3dNixiDkA+dJPBgaP4ckAOWhelauMeVrWUYuFTeadsJ08LHSyKMKuXpGY6x0I5AnT8jiy8PTX8m8vCJDDj3Mx2tMA6IgaWmLwaBlQLyM9cCDr8Y4TwrMSce40gUmC6iThstdyxDjTCDvPnRm7RoY16/B5nN3wQ1M35hBXnD6fJt2G+zWiq4tQw9tdBf+yXeBkR5Vlo/eyy7k6/dOtaBT5+DkhTpAWhQ9xBIn4xGIR6CXIxCD814O2NvCHrr16izoGtEJFTc9K2VcBITTCZBcaCAobIN/OA+7gxpY58Q+HG4qyzdBHhsz33P4vEsxAHOaQB1gnGUesLe0tMhA7nFOQMpApTgB6dMD9v5uAZgmoLWJysdp0nj4kIZ1vdNb2BP77CPJ445HCRGdRwK423Nx6FCA6tIBAOweAJfDVFcFP/Zt2HmmU/3PVQHoRx0ImhETBZJ/I3zC8VBB+QyDaTWHPra3ufJgy8jkmWehFG8Vfvc7+JDPd/1ln3mAXz9WxG0bCb51LNiOP8J5r+NousN46zn3mVe3G7TQDhncNactNA7Ua0eDDjG77QVZngSmSXc0B7IVYJNuAFpjD86tDmk4HBiH5dznw3XMlUVpKiNUxzeskS9TfaiL5YM0NQRdFdVkkHYlLAzRXdITwpl/wzQv71Dg5abBxxrxnoGgZSAYjwJ3nyfNDgXBrEjATDova4BqvbwhSmkaE1DzlwEjAfIsZ8DpI0X/smk+W5vFnJb0LHcXx6bnj3IpCFL1toGc0qmPnV/H47Jsw3zRTUymotbeJX+oS1QgPaosHz1KRnc0jntU2LkWdGqgv9QcVUiLouewxdl4BOIRKGwEYnBe2DjtXC5OXjo1uZmSt3zMWo7iJzedxQrT6o033pAjjjgChut2GLndLZ4AnZM3F4hOgcvH3Joa3xZkchbmglFaydmOtUUStOjsKJZBA6ATHxJ4PyYopjWdFnRYodN//asDx3avtpjbFYJHgTpFhUL6pZckPWMWFndOAIoFiMesP7l8oGwGkOVWisNRD0tMZRw+0rQa+78vh8W+FOCiGjxLG7fBiE/kAF0UnHud6MBPVMn+0HKP9EBsCbmGaQY+UMCdR8sJmPlQAhccBe3Wb44Rt1hkHYJv0imPRzhtNMZoY/onL8JzBmAN2qTF3B6oGLejf6+99prTYXv+Qm0dUsasb+Or6ewy4zPUwHwWjXkMkR3+GSuT17JscB4AdQgiGFOZ4BtUJVI5FAIhhPLoHVU+mBry8G1Ye6pEpq4+l+n15fhYhboEgXqgnHItUASreFFKJvBToGgd9szKw7atMmPLkK6CPAnMzDKYbLIybfSgzGSggJdDEHyakdGVFRktwh/P4qr4jJWxUOuxEusgr0mvtJYZj7XBPNO4BDX4cvIqv5Yhw8uXNOb1Dz51sAW/azx/8p7ALxk3bkpLE2ipdowFGta3dqDznCggZwNI4z2U8jtQ7mhaxPOkv0U0QMU1jwgxfyLuXuaVoExWYmACeX2AUEI3fyg3qNgN39tRZBdGrmzSuyvL5e9lPl93C7ag97K9mD0egXgEdtEIxOB8Fw18TrP2gREjc5drZzVSu5VOmpxI6dbCiU0nUVplg5nYakbHBIi03NJqy4mWCzxp1VXrGqroAkcDrWyIQJuB6XDQbBqbpLRK8dChItsw0xK0ctbmzIvdWlK33y5CsM9gE5WP+XGgJNxVOumukhsAahMDAMHZJ1jnq6FDA/jqvV71BNAoG4c21tBCD7DQjKMW4Lx6ULkshS868bWCAbZnVnTTTRFjEn7tKWnmolE+qOiG86ikQB59ph/6VuxQY0Cc/cdBHJCizmE6UYYiDdb3acZoO3HmmdirHnutoy4P/VIrZaCcaZ4Ho+UOQ948leguoNxYbNjdWGSGxM4Hy8mroFwTSFNv0jksdmg+A84VjLMMdLWcI106UGT8zCIHzEmHGwyFc9hxerBRD+sjw8AiHqin2Yi88bjY11Nmre7qGpn1UUaZmmCENhUMsoxpBpZTb58kyTKkMW0xsxSoeZc0zAgyBBqv8pGBCQS25dvTJK8/H3gZMWgUyjDpi4L6zDs+l7A0eRW0UizSWtfHoGjenlG1HJciiaxPXpYxCuoyz/qkIV1egRTPC04az9voSUzirVUzfmNvpaRxI8E57j3g5V2JrC7Nag6k23mlPD3//jyzCfLaWOn5Io2N2zAhrUmftzLtLvlygtI9jfKUP4enP2XtXrujOoWGNEtUwRZ0LujZ0WCTSK4cdtItnsotcfm+GoRo6TE1HoF/nxGIwXk/PpeYiXkv0zspZx5OQPjj7HrI8z9m0ULvtI2wNrdjISV3TSkq6gRgclYyWsoEtClDsFCS4JIAlIH38HDaaKQDeKQImgly6V5CYE7rubqWQB6AstYlr80FPiZALxo2TDo34sulOSExcqSk5r0miVmzpAIuJvVTp0nDtOlwi4f1motIt8HHnaa7oNdoC/o3pzsA0htlKnaLWaIgHXTyKChEWs19iNFnLiptoixa/tM0/UJvuu1wBW4x6nAbSD6ccCw47nbQ7x5uPZq3snBsaWx/mTj+vSJTZ8gMnjGMC/ev70Schp48p3Qz4sPSFn4EqoBgQ0hW9j4qZPF4Jkaka9ZoiHm6lM6YPJrHteXpJGo5ebndJ+k4DJybSwuB+ajJSakcidUIYGhvKZKONrg34ZzwuuLuPK5xjAMb8kHTvg2SrC2njGMK8wRVWYf80MXJ9XVzaUE+A7JBQgcy/Jr3Oqh8n6bcrDwYTXenp2MwHqeQSsO1gdgfGqH7DHYJWVp/u5pBGS8zphHIZ2WWtjwLjab8+MO8HVqf7ZGmGYtdPavLIuXJqauV8Dth3SQGmHExTLLJkpSUlOL+sE9CGtanpL7WWdYVkCsXxofM+MmQRuG+20ijjBkMnO2Bz3PgvoALTtZDmbaqaa8zyCraiWPO8aGCr+JaZmYXBho5okK+j5Dlo0fJ6I7WoQPXlQN3sTjEIxCPwL/DCMTgvJ+dRe6EEg6cnLjICsEAAlKY1ECD30CCXx7lziUE2AWEGli0abXlwYmiCCDUFiqm4TxaqSAYgJv+2QSoAOdpxAnmCT45GRGwE4h7MEor+gAgjBb6tVN9IjiCaO4DTms3gynv4xTqFGEBaQLy1Kfbcenf9JtviuBIApw3AsCmkE4A8AoAfWLvfXShpz4U0NnV9PC6NOOBoQZ1qgHSnSUderLN8IE2h8N6v5oPEAzUl1b0JOTpXu8YT2zZmDztQ5L6w+9dPzjePNgfPpAwbWA8nPa0xOTJ+GDT4SL1G6Rq9CgAMDreYN94jJ1zc+FagDb1QV/BxajbE3htMLB7GjuCS7suawEJrsidhuBceDrKCHZ1iCwmzeh4wMmks3mrRidkzFRcR4kSaW/GXvWtfADpBIhD35pwTTS567KjHW4SDS5NVRm8SqGEo4cLA54Md8CfKQsLy8jQ8iwmX+ZpWUVZGcenpAg6S20IvcRQBSSzu6mXShafZcCXw+pKPDEoCxJWETFoXciekEUPMi6hfwNatjzLlVdhy1R/GyouScigIUkZPKoI5xhfEcaDWsXgtFTu0y71NSlZsySlgNws6eZ/TritW4Bi/PhcrOPFa0szUIA6IK/Pbn6M+TMKTjPSSmZ9n2bVoNPhtCkexzoCxfmeGHLHRwc4l9jLvHvd1lVSPnovxcfs8Qi8a0cgBuf979Sn6Pypwc1Auu85JijajHSCwkyn1m7wcFLEe2dJEWwTqBYQNsJi3Qbf8Hb6oHcAnHOGRKCVswgz4YTB2J0cADcInB3Dh19Y6RAbubB7CvzABwPwttBfnACes/Q2yGCaFnZFd6F7uEc33GaxeMQIaYfVOzckoQfv8Z0E+QjQQgRbQKaxn3pit4mSPOZYKZtajYINONAHHnxIga7NGIvaLQ1SXQGQjg8p0XKdQaDYrKUELifoPwGy6mjAXB9IIKcEDyPNcHHhB46OOFLS2GGGctX/nOCcDyg2JvlA+r5z3BsE9L8avvJJWOr5aW71P0esrkbQgedhw4b17N12BT+Umbp+mI3OrKUN/DDPU2NlWo6Mvq3W2A8XecjLA88wBPFaj3kQx01P4uGjBG5KZdLc1ilbNrXK2sUdUr+6Q19MZJTqi5ReAX0hKJbRwwg0rMf1HRFGTSqSYWOLZeSEMuyoOlCGjemQgYPbZPk88MM/PQDpqKseQP7NlVrWcc3wR6xvPZj0p9OuPc0jk2VFJw/qkSfMb2mUZgffRjbx7c/xdxMVusOo+epEyclH029kRBTiZxqHeATiEXgnj0AMzvvn2UuUwaqsx0Afl8Oa69JCeqmVI6aVd2Blhq+ALm0C4G0FMCU4pXsF/Z8Z07JbDLA5BJNNFcC2gnQCdbWWYwJmTLCtBydklNGtBcBzy7ZtUsm90s2azTLsc578yEfc1oVhGaF0GsA8Dd4kgHS4HeaT2KO8Y/XqLLrywP87vXCBpObPA2hEm5ytCZLtoMsK0s2QW9sAkA5LehGBO+k8oP94yK7lF1ABjnURKvuh/SGPT5O3uQUW+70x/m6XGuqUMrcd6wfbDadNj0UL3dnA240xtM6Dzo82dfBAW60A+s6C3ir19fUFnDnPEo0FtLALTgjxMqnlxqQEEh1dAUMXGspoPSc493zkJzifsDvA+ciB0tE4SDbXtcn8f26TeX9vkbqVbwc4932Po106AnUrOuWtZ1vlxYe34Tzj/rGtTAYOqJCpc2BdxzOtXSP6NoYPc3ZtIW00d/nhmiKNl5/+ydTVDnqaMliPSbPghFgujnNGAMAdA1zIgYrhsd7edE77QbYQeQFznIhHIB4BHYEYnPffC6GztQlf4swcKUu3bZNUC3YosXwr8vh6aGfTVtDJ39UKna+Xb7z+BjZYweJE+qLjCHyFAWQ7AR4Prq72QBwglcAVRxrANnMgD6DJPdB5dALotsK9pRhgOU15LFtXJ+mJk0T22TcjKwD4DigTLHfA5SZJVxeCbeSTWCCahDsL6e5hIMMb5OEnn4CFugWLQrmolvq7GO0yrbqlpAkPITUNm2UKPnCUJA3yCc7XAWQTJPPhQHk1ht7azzbXT02Dxvfw+DCRtg33n3QuQGefIDv3SNMlB28b9oI1nmux+OVXvvlI4SGG/v/cEpI6tGPcli5dmu9UFU4PgxZMjEE2PElCGul6hNKcpEkLABXzCqo4z3t+zXvL+Qy4PAytwGJZ7JrzaqPMe6IZIB3jEId3xQg0NwKoP9Msr/2zETu+JKSsaKhM2psgnReLv15yriEbGJDdtaUJZvS/XmfKwwvOkbOuU6NpoS9XcJlbYAw7MQ51RVWyfD4VrHyHY4xVFA7Hs1KBwQ92gdzRbHaHyC3NR8/li/PxCMQjEIxADM6DoeiXiSJYycNBP61NAsCdC7gpIwG4CWs6vsg5aDCssmldyOUZeozo87zPvvtgQi3G9uawnNNtBfLo7kKAPnPsWHkEWx2qVZplZhUOp2m5Dh1b4XM+FDuu1KlVGuLoE4EvktJnPP23v7pZ2zTLmRc6li2TYriT0KJOX/OOlSuNMzJOnn0uNjHHl0E74KJCcEyXGurINHVizIB0M4BwbedmuLtUYptGbPsIQN3AHVqIQIlIaT2nhbsT+tLVJegj+w1ZXDTLr6UycHEoxifc77zpV14ROehQ2XsEFsKiDrew5E4Y1I1vK/jmormlVZb0ATjn9WAhN63TJAp1yP24uzSJjh7OG43yFLATmIf4ho3DG5aReLsBt5bXn9oimzdgTBNYbFw4KqDoOLzjRyAlWza2y6uPN8rsIwbLoBGDsINPo9S8gTdFvDfhUmfg4lC9fnAdWdBPG+BCS3BtDX+y4YuWdZDnTyUcAhp5Q2VGD5ONFq7/tqbZYFQgPaosHz1KxnbQ4m0Wt2PQ4irxCOzqEYjB+a4+Az23n4aFPByCySuYsdRLE3MUZqk0LLpgTsOCrruOhCt2k66tdQtFS0sBHP0EwlgXnsKiuzv8wtVibDLYdtA+iFkTDCehItkMcD0V1u8NrS3YqdBZw2UbFmGOGScypVpk8aLsycq3q00AsNIyncQi0A4umEQ+X0gc9R7s5QeZdXUOPFMvBedAAgTUCtYRc2RIR2huhZUflvORcN15ix8rYhnbN4dq3eOdZND1ANqkCL63X7JUdS8CUO+kK4rpFvBanZyYDwFYLLkPrPfwZdGxVSs/H4JoPQdAp2vRyu1YIArNob8fTs2QgODTOrRhuit1LKQbHylIOyscY38QlCs6z+TJN2BQQsZWl2EP+uGy8OVN0rQV1w927CkmbxzehSPgtgpd8EKT7H/8MBk2PCHbxm2RDdjhhdcSf0LOlQVgHL8X5hl4teg1ipj3N02jMKBpRXIi2KVlNM/Hn9+7PYSeebKGouBtFvMJyJLWUwZnzSaRMKu7qdjZC5f0XfrBLx7Ud8JiSW/7CJz8A3zCOw6RIxCD88hh6XfEZM4uLjqBUUsAO3e3c1ufcROzIix2LCodIMlWLPiEn3qhYcmSJbp7SEkJFjwilMB1IwBpALgjBlfKaLidrFOQiZnQwKjNoNYQ8zw6cafHLh318OseAT3quFhULdSgY9Fr4owzJP3HP4gsAkhnyJGTpMsKaO3YraUElvSOdeskzcWYUYHgHK4tgb+7WfcDKzpAOcbKdMajgkyEi8om9KUZ4Loa6aXwTddHAPrMUxcCe1rPbTcX9pc0uOKnFy/Agle8CaAfOseDwcbDUEI4b2nsDV8Gy/xkLBBNb2mUDoB1IhRa0QnMedAPfaH5qjvJef/mDFkXvqDcXSSunGk7mPRlSvJ0pSHtizI8pOH0sdyO8bNKpKJ0jCyZt0W2NbTCat4pJX0yyXfpTkx4x4wA3wy1y+KXt8reRwyXsVM6ZWt9I3bwAUjHtcGfA68tu4bU4KAEEJHhfvJGIw/5lVkTmUEIyjKkfpOKwqdULh9GzUfvbYdw94oM8cusyGGJifEI9M8RiMF5/zwvkVoFu7j4Uk5mnLTwRycy/ePyum833TYA9pK09hYYGgBQly1bKjNmzNAadLkogjWZWx4WwRrajoWYx86ZI3f8/e9uq0X6h9P1g9ZjxvS7NlcQglxOpjg2A6CrFb0JO5YIQTrEc5/z4cMlceFFDqQ/84ybgL2uSXy5NIkHBLq5MLQvXizFcLERPCB00ErureCeXRLUuZH7q3vfb7rUUC87DLBDnyFwlxkDq/4aWPcbPOCvhTW7Gg8ESzdvdh8zUvcW1GcMVw3dWrIIfeLBha+vvy5FWLSqC1Yxzhp8f4M0E0ZjvN9+kvjAB+WwYuyFjnwnzin9zvmGgru38CuuXAPQApeZN7mlZB8HgpkuwRM1YjkOR/LMzBNsezqpYd6qUdiacugo2bQmJRvX4o0AxoouCrxe4vAuHwH4rDQ1dsjqJa0ycdYYGTFxiaxa4KzovIYcAHcuLbaji9I5bLzeEOktLnQp6bVHoi/U8kxWL86wVR5F/S6EurNTdSvO98SQq0VfKEgZUe1xixluW7UzQmyZ3RmjvP1txG868o9dDM7zj03/LLFZqat27gMgwKwE6yh2eIoTIYA1vqrZm7Bw4UKZPHkK8KgD9tzrnNsspuH0XgQwexw+EnTHo49mgCeFE3xazHsvFoRqcDdpnYnrAHxHlFc4K3oHNCS451aJcC9JnHeBW2T56qs6wSo4h4U5y+ccQJv5IrjZlEyapPz8mBEfQmTCBMjzDwoGxPmAoAfANWlID8NYDIfFuwP5pdxWkuDd604rei304QeZlhGkt6MOXV3o7K8x+kheHhiHkgMPlNS92GbRA/ygzMbBYvLzoWX33fH10I+IrK+XU2dPlA5Y3enSwh1cOqEPH4Z4tKE/y5cvk1b6te9o8PNgeDa0U2Jx0IRn0sjSiL0ID8pJcDWMXjWyDFvcD5F1y7GtZREW8xbTtSWQ2m8TXF8xbsxuUr9xvWxrKnwhdb/tUA+KjRw+Gg/rRbKuDjsg7aSQAEBPJDvw4NYqo8ZXypixI2X1wnV6DfH6sQO/kCDw8iJdf5aeh2m73pQecLtEwJ9Dz8pScLihrMK3JxOFT9kS6d2V7ag27GpUcHf0qJKYFo9APAL9ZgRicN5vTkXBirR9epaU3LdSEuub1aBrViLejP3yK6QA1Ykr8QVM+jVzgV5xeeEuLlTmZSwCfQ/8uYtgOaZVl0AmhXSSbh7YXnAw9iHff8oUmctFjJwt7WDlrNnTz6rqD4E90bEwdCis1oOA8LbR0k6ATuCLPde1Hq3jc+dKEi4gSYD2juXLKbFL6MQe6Z2woNP9pWTiRP16Z/n+++v2iyla0KEzd2Cp8KCaH8rhVo/cj70RoHc5gTnbZzDdGWPS5MeMVqG+gnSA9U51jyFAh478kijK1MVlwwaZtv8B8tYjjzgLvfU7XwxdEqd8UAS6Ywd1mYhxaFm/QS3mtKA76zm/4toBvN8iL77wgtNvJ/wluOHBYLGlcyd647W4bGBCpk6bKivm4yEJrkAJvF1IFnN/m9yaKr7bPx898zPyHxd+tQvP1sYGqaldJo88/ie5676bs8pv/ulfZPrUPbJouZmbb/+x/PLW7wfkE48/XU4/9RNy2EHHSmmpe3hduHi+3Hn/LfKb390Q8DHxqxvuk91n7qO0iz73QXlz4asyuLJKHroTC30RGrZsklPPOUAfrJSAP7P32F9u/MHdmv3ej6+WPz34OyvKij/36f+Ssz58YRYtX+bUsw+QE47/sFx60VX5WJS+Zm2NnHH+kQHP2NET5OLzr5D3HXuajBqB3xfCxs0b5I23XpF7HrhN7n/oDqX1VhfKKDTwekgnOmR9TZvsdcgkqRq1Xjatw++IlwgOu1J4TZlLi9KZZyOeR9PWqFXy5QHwJt0Yw2mr9y6PC7ag59tIvTfjx9eukR9Gwk0yaTfKCIG64CmCHpPiEXg3jEAMzt+ZZznx8gZpuWwPSWPLstJbF0lyQQM64mYh593CNN4ewrWgEyZM+qKnB8CVAi4hvQnr4Oe9DgB43LjxwK9cIEpcCis63BaYLoJbyMmHHCJz4XKiiI5AmMAVoLhLMMRHdwcctbAeT8LXM1fAVSZFy7chPbjjcE93foRI9zmvre0iKouAtlLw/26rGioV55wjFdglppIWZ/jeE0zz65xjB7o9yptg4d6CstUKuNEB+qFTXws2V3haM3hXQT5BOt1dCJ71iSiFpx0CdfDza6N1G+olfdDBIvhAUhBMVm5MH/VXsPvNzFnygd0m4JP3LbqVIsE5D9u9pR0++m1YN/DWW28FIgtK8NSHA/IBySf0VATEMLNLB0VIBLwkWt4lnWBPrxiKbSI7hsBvfi0uDOzYAoCes1Sia0N5KBza0SOxjiAnkDZtyu5yzJEnAfzOkf+5/vMBB/WMqhMwIKHPVv7rlx894xK59kvZIJy8M6btJVd/8Xuy5+77yFe+/slMdVzaJp8vaNg3HkZjfPEFX5Jf3PKdoA4fiq083HbA4BPcQ974csty80m0WQj/2rqaYPyHVo2Q237xiEzebXqWuGGgH3HI8XocfvAxctU3P12QbBNCXXpzjpN4sE3grUo73qq1NCZl1LghAOibgp8+7108jxbb9YZaoLt7DttWHgPfpgyvw1yalYXq9MAWqtG3yUh8iiZIjyrLR++tVrorVEQlXJpxiEcgHoH+OgIxOO+vZ6ZnvcrebJKyBW9I52wAolOmSOfZAM2Lt0rpX2ol0aqbK0JIUv2nSwDMO7H4sAggtbRqSM/Cczjmz58P93Ds2ILZT/3QYe0uoSUdwDOBXVX2gUvJRPiPr4Ql2SN4FxOYEtAy1jTzFIOYoBpl6+o3yjjoVAuQrtZov8NK+do10kb3kzVrnDaKEnMUsyzcXBJf/jI+dlQh2/Bl0G0A3/qAQMs4jv1HjZSFeNBQXagPQHB4gajSTRZ1Y7AYyWaAiVo8QEyBH/wy7O6S4gyPV/VEpwMAzgcM7JRVa1ZLYtZMScPir646KA1QRC6a2HNPkSmTZQj6/J4J46UZ40ZXFn6QyAA6vyTKvc9XrFwuXAvwtgX2xQ7fSDDUpEcF0JXHx8bPh7htGHqznBO4pbfT95xLBix874fXqesJ8+PGTZDPXXKFFhFg3/3gr2XBknma72jz5w65X938U6Xl/tnSsE2KSxMyYthoufw/rguK73/gbnnuhWdk5IiR8plPfx7ndYCcduLH5KXXnpa7H/i18nW0ZuTz8qAcftI+HC76+OVy3yO3yIaNuN4Q+PxngctGWCcqtLek5L4/3xkUzZyxh8yaiesEIUxnnm12YumGhbv/dIds2ow1HDmBbhPW3hWXXReA8xfnPiv33n8XvMnKZOaMWXLWGR+XuvVr5Ce/+bry91YXayOn+cgsX5TZw03D+g58hHeiLHxlUzauht4KxiMkcPTUAGGnghdf6LcaVFHGIBcnIkagOOqpIIIv2AszqqxQGs8HTmsXdtKi6F0YY0I8Au+iEYjB+Tv7ZLc2AdAy4EMgiWfW4h6HXT8+NUtafnSgFD25RooeqJGygZNl0O4HwZBcIhufuFMSHfBtNjTlahf09/nnnpVDDz0UVh62QhwNJxocpbBoJQAUmrDo8/wTTpD/ueUWh9zYBsExAydP5u0gYMNOLpqHebEJ+6IPLMOGfDjqaUVHT0bC8t2GBaFNBNUWTI7lw/EJJwL5AA1yoSlREAE4F4dSB1ryPVDXNOUQpOuiVcTM8wgHoxkdurfACr8K2ydOBgBfjpi4qwSLO8fCPWUFF6lCb6lCRNcc6mHBZFgMS3zipFNFAMo/PnsPqNkBKzm+Foq+tyNNtxYezv+8VZ7hYtntCNCmTwJPG/tmp8/lSeraQmUZ+o5+4tTpwdPA9bTbE/gixsLmzZvkpl/9xLLURj57yZc0P3P67rK0xgF0ngIL/+83N8qChW9YNoirRuPjSSOS8sETz5FB5ZVK/93vfyOf/c+LAp6XX31RrvnqdXL3/bfKM3Mf0hcxLAx3mQ8ffEHDIxwGV1TJRR+7XL5/Ix4YEQhGLdCCnstvZT++6TppWJ9B87+68fYAoN/065/KM8/+01ixj3iRvgkwwlt4UP/+/33LskFcCpejMdVoFGHmtL0D+sWXfUKWLV8S5P/vx9+VOfseIIvfrJXh45PSW11K8jx0BA2EElxjXVyCRcNwdeG1Up4cHZSGr7HwL5KnlWUKzI07dK61LFQhnA+ntSrrhXhN3M6I8+FQ0qPL8tF7py3v21EhdGlGFYdo0fVDDAUmo+SQFkUvUGTMFo/Av9sIxOD8nX9G4UHQJRTdCPeKXy+U1KzBUvGlT8uE6s8GPENPv0Tqf/tdKW6rD2iFJrYAgL8OK/pes2er1ZvuhPRFp3ug+rbDwrsPtj2cPm6cLDKLN4UTHBOYcpZksFhpRGBwQ0FUv2mzjB89RoZCpuBhorK5SZZwq0Xj18qhP2E6dmBJwBVGF2e2t2aDcbYPoM6vlupCVfUhhz7m1kI9eDD0FIOlBXJWd6yXSQDpXEA6obJCauFHrm4vRJQA5olDDpU0FtbiHb6K7fJn5Cg80WyTUXBrOQqLWxvXr4fqrTjwSXTUITg3H3Razue/9loXETuFgFOWb9q04beY+jBdUoSvhqaxrSIsvEm4XvGLkekwUy8UDwP0gZUJAEcHNDvxcMfxstAIFyv9MqXXwegVQwHER/Iayw5FJU6v3afvFxT89e8Py6CqpO7f3tmRlgcfvlceeOheLSdgrRzm5IS7UoQ+st2wBX0bHjYHDaqQj5/xefnzY7fIkhVvYGlFZhS5/MJ0DRr3CcqhzhZoabYwsCKnDO2GdSEQj+or61t7pcUDTZyMHT9StrQv159BO94KLFz8pixZ/qaMnYa3cL5PvdHF2gga6CbB3XyKsecmjyK43iVTFegL+4N7CetlhqsbKV2LWI31Le7K0Q8o+fpGelRZPnofdQXDH9VqlHR/k4wqimnxCMQj0GcjEIPzPhvKXSooGf4kI2+z+i4dEzys5KMOvkyqqi/I0o9fEh198XXSvhyA79abssoKyTz//PNwmZ4FVoASoifcstNqhYYVPdEsjfDP/sypp8rlP/95RhxBbxhpsERnUerprOVqgofMVevWyhSA/LKB5e4jQQCsaukOIxGTbGB67DiRk04SmToVFun1kElAjgMgV2MCctDStKYTMAfAnHrAWklLugWTGY6ZtjznMvxvgd7b8FAwc+RIWQrLeTv1NDTJ9AToNGVKxhc9qI+G4AqUOPIokZU1cvHxx0gHvhDair3auZUiD/M9d3G7PP/sc6bddsdRw8d+RIZI5kjOgBiuMn78WFm3vkZKypJS0pbAnu5oCEO/PUG3cvQVaYU+4j0HaW63cVPlwgs+o+naVSvlqWcfk9IKzxjq18w9J8mecyb7Ahdtblgvby5+STODBvJ1hwsNzbUybnoGEZcPxhaRq1NSOTwpFcMIKD1jSL4uuIb1PCgDy89u+qFcdMGlMrRqmJx/9uXy9R9eqAuzfW21euOlS2QYsVsGnJOBDzgWKvFhH4LncKA13gIt2Kedjt9BTnhm7iMBZcGiN+Bb71xm/njbI/Lok3+QRcvmyeLl8+WFl56WlqaUPqCwQm91CRopIEELOvWlW0xJKa4THGPHTJBVq2qiQWqETF5z/FlZHMESk0IjkA+H40NFIa5ukvkEdFOlS5E+hXWh8iTy6axARSLqx6R4BP5dRqC/gPOTv/98lyGlZWXqqHI5YsYwed9eI6VyYOEv4LoI207CM3PnYfFjUg6as5dK2LK1Ua647gbguLT88nvXbKfUt6daZ8qQjyJeYC5aoDpl8DEflqpTL+jSaAUm9IvGYAHc9NlyYJfSngn8qujixUukuroalq9i4N5Ot6MLqnKyLIIv+W6TJsrR++wjT/Dz9SQqkEfMNA8DxJoHOLYY9CosXm2DZbkBQHoCrNM1AOwayJPv/n34YZKYWi2yGn7qBPwE5+q+grEhWFeLOdohOOfC06z2Q3qxIbaTG6t+nu5KpQrbPRZDzuIVK2T0sOFSAwtuig8qnGLICot6Yuo0SYcXi/IhBQ8RiaOPwddGl8heo0frG4f6mlpshNOCozWwnhOc04LeiB1oXnzxRd9q30T5hrGL9JzpkvVySFmnRMvxpwxrHUoHlOAhq1hKO4rhToV+8+3FdoSwZfrKL1zfRcKSpQvlS1ddIumiNinGAwFDeJ7/yTfv71LnZ7+9WhbVvKz00pIBQXnRQMhogRW6Yphcc9kvA7olrvnBR7E+oCVLPi3xxWWwouOwQND8019cL9d85Vty0jEflYf+cZts3rTFitXazjqFhPC5IljPrRceny985utdRL6+6Hl5Yf6jAf2Gn39Tjj/6ZBmIB+ByrNU47f0XBmWN2zbL7+7/odx6z3cDWjjRky5h3p7SxcVYv1JahOsE1wiuFR4qP2JYSO+CIcmX/ZMMmlT+PGUB0y5MhK/PsBqKUcMEn2ZX89WJYM9Lwt0pMuz8GTZSjZgYj0A8Av0FnOc7E1XlxbJw7TY9bn9mlZx50Fj58AFjpXQnbaK8ctVa+dCFl+sN8cWHfivjx4ySBmwFeN8jT8ih+2f8N/Ppv7PpiTL/ypoTEu7kus0iZqihZ16CBWSw5IbC9PKEfG1qkcwclG2lC7EUlPzX00/JxIm76aMAregpAGAenDGTTSJb4K7xqRNPlGfmzZNWguUwuObsyYN0xh0+D+WHwC+7HKbIVXSPGTNGmue+IMX4kmcHwK8D8X7WZb1jjoFPDNx0YG1P4GFAsHuKtEMmfc8VnCNtsVrJ8eBiFnUD3IzJEw6kMYR5wnmkR8KVpgRgezV9zsG3FvEEurusr3MgnXXrYMmnZR8fIdKAh5nE5CnY3x2AcPkKKYM1/7PvPU7fOLRg55kWbKPoFoc63/M0dOZC0Reeew70jCuHE9bLvxiuHQ69kFGGNwtlWEswAEdLKx/iuHsQHh1tbHuhDJ/twsFdZ3zmAwpGmFo9Qy487xL57s1Puw8ngdaTqrxU6UXFwEvJAk8N6TwO3z/bEs3HXmBK/dZXuA6fubSOU0dF0RXnhz+9Xs4+8zyZVj1TPvahL8rPb/lva0afV639gJgnEdVWmDX8hiFMtzQ/SBtua8WyN+SE0w6VL33+v+SY97xfKgZVGivSVXLxOV+XIZVD5ee/uzKgW6InXYyvkLgUri1lZcV68DrhIuskzeqhEDo1IeoOJNmB7bgGd6DFd0TVgrdZ7IsTok8h4SvJhgi0vngKMXFxHI/AO20E+iM4HwJAfszuI+Qvr9ZhH+qUTBoxUK49bYb8/c16eQi0255epekrTpoq00cPetuHfBh2EqmeNEEt6EOHwKe5jwKt8D/45e+wq8Nm+cl1X+kjqZhvWpsBHVzg/TMNH87yw0/BlzWHSjs/ce9DBaxvN+4/WAZjYtzRsGpVrSxbulQmTZ4MUAQfUqAUtfgCdBOEJeCDXYZFk9eed55c/atfueYIjolmoiZJKD4YQLwcCGj16lq8+4YvAfibaldJAlsRlhCkA8RyH3MNnGThSpM440xYxPEQQjBslnJ9IADoZuxdbxSEA/CmyUM9WN8OCmQ6X2xlAPIcuYnYKWYLdl1Zj11r3MDDFxqW+XXYCnH8sGFw0VmnHxnStjfWS2IPvIWhjtBf+OChDwkdchkeYIbgbUEdvoi6Db72LZDZBiuzLQzlODahzssvO1cMp+A7428ZPvw0ADsFlQ0sk9J2LPRNY6cfAGoD173pBY3vFr523eVy8+9u1OyokWPk2iu/I6eeeIacguPVFQ/K3575g2MNAYmTPnyYVQ/i4sotUgTXCgY+GFkYOGigFDW4d1C/ud1tu3jK+8+SkcPH4PRtxZrmFlcvJJ8uLpRl8iiLoHnYhARcXa6XH/zvL+Xgfd4nfx5/izWjLi5h/qAgIhGGMurP7/U2Vv+cotnv/OBa+cdTf7UijcvwUB5ua9TkIln06hvy6c+ejZ9Zqew/5xDsGT9TjjrieDnlhNO1ztmnfEHuevQG2diwLktWT7pkMXeTSWKASkpoOS+VgfgeA68TXjOFbibSjejui+y33D3X216aF4fmwah5MW0vNQ1dtlk1cQnHIR6BeAR25Qj0R3DO8SgDKPvU0RPl1Dmj5DsPLJGXlm8BUF8p3zxjlpy232i58e8r5Lklm+Xy29+Qi94zUT4A2tsZKjBJ/+u+3/R5EzWr18mNt97V51b45IDshxbCi4r3f0LaCQhD4QeHj+wTcG4iH3vsUTn/gk8qQO8EEHaWdAJdZwjZtGatTK+eIqcfeaTc/eSTzs1l/HL3AABAAElEQVSF1mpOkgTqjH2+EkB1IJDGmhqAc5r7iARWrYLLyir9ImgHFkmWAPDr1zUBgtOwtOMdvQgfQOhzbrJUHtpgrAfb8KCeeVqiCZZtomYcTlvnwjTPMwztD8fBHVya4I6i9UL1uWBxXUubjB1WJWu4YJQPCOSjfmybDwvUBfRj8PXQQ/faS9bX1gL4NUszPvTUin3OaUHXhaaQy/gfTzyuNFNru2N0s0ezcpTwcD2mEcIkzXu6pflgUY7zOailXLa1DJTWDm7tiQW8SSx8xRj01ooetqAT+HZ0urcJq9askD/cfYsCdLa9+7T95Mm5DqCHgWRTcyMWP75BliBwR5OREx3y39q4OUMfNQ5bhHI7zU1y9dcuV/ppJ31M4/Ub6uCS4S7jsHxerqSHfdCp85gpSbn3oZvl7DPOk4MOOEK+fPGPgnYIqvPt4hIw+QT7bIE++Ln1wuPDc/zKa9lug+WD4TK4nznPs35Cph9YLHXLO2XrxnZ57sUn9fjtH34pv7/5ITnq8Pdqc1MmzpStC3IAeg+6mJ49xcX4/ZeWFuMnXIprZQAW1MLdBtcMP4IWWBsgJHRp5WR6aiEu780I7FQLOhWLekLpq6eQ3nQ85o1HoD+MQH8F5xybhuZ2eWVlg+w7cYj870d2l2vvWSDza7fCcl4jFxw1Ua3pj722Xn4GoP6Lx1fI4rpt8rn3TsHr5nz2gJ5HnJ9Qp495X4e3S253ena2EIj7qQzIoXT3gyVdVpEF0D80ZbAcNKKsOzG9LtsKC/JLc1+Uvfedo/db3l+d9Re7j8BaDUO+lKxeLecce6zMg7V9UU0N1ATR0A3TCMMBuPnOfx32D4dTO3gAZFmGvcbVZxz85GzDA0cpti6cddnnZAMszeu43zP902mRJgf3TWddgmHWZxxOg6YuLsqPKiwLB6+P1iXd5wfBmj+yogI7t7TLIj40hOuZfPLiIMBeDx/lMXB3WUtLOtsijx0A56MARC4++WRpwPaKmzdsBEBvVN9zurFwjYNamSGuDm4zvf4wUbg/3aSprp2GSLY8DEqOrOCGy36RdXXrpLzSga7Wdqwp6GjCdpQA1jhvvbWih3+mQ7Aby+xjHNjsgLixEzILPLdubtLLR9UzRZCZPBtoeCiuq1BwO7g4wluLXpFT3neWZg7c+ziZu/B+PfWjAOAPnPMeLPQcrmVLly9QcBsSo0mCbV62PCwQVBfDN300rNU//3/fV4A+uMLJIQ/7FOa3ej3FUfXCAJ6LSGcAfOeGcFt7TD1UTjv2UvntA9fJilVvyrYGvAFqSkvjxrQMwEfBLDRsre9WxyhdrG53sVrP8VQzABbzgXjLUg5f+EHlFTJwQLksW7bUVcX1GQ687roE0IxusfHk5o3eX+IofErd8mJU/Fjz1elNn0I/i6xqXa+YrOI4E49APAJv1wj0Z3B+3J4j5G+vb5Br7lygvuYfO3yCXHXqNLnkltfknhfXyQl7j5KxVQPkvbNHyvQxg+Tr9y1S/g1b2+SaD0yX8jLMjj2E2+99SP708BPyq+v/C1uePSk/u/VOWbpilfrHHnnwfvLVSy+QPWZMyZJy3EcultGjRsjtP/lmFj0q8/ennofMu+T5V+YDoLXLxPFj5LQTjpHLLjgLi82cdfv8L3xNHn7iX1qdC1DH7OusVDf/8L/lhGMOjxJbMC0Jk5pZJXkTLxo1Wdoa4QgeCpftNTmU67vk008/LZMmTZbKIQ4oJRLOQuomSEwq+Gx9CT4ydO0nPiFX/eIXUgPfdA1kgBVtxNBh0rKtSRrpZkAUwYmYZTQTEtRihxQgVYcmJ0+RdgDbRWtXSxXKpmHv6g0Az/waqFqdabFm3TBIpzwF75CFssAHnbLDgfUYQnE5/KiHA0yTVofFqvzyqJPPNvIckMtdWDbgGAX3KILsQDeUjYIF/hsXXACeVtmABa3b4L7DhaEt6IMtCvWKyCMP/8Ul++gvVe4CytntfLN2qN18bCoTfBZblSa47IwaMx4PNfh4VmobXEOa8NXIDkm20a8ebwl4jgoMYRcXbl146rEXas0hlSPl5CM+E0hZsPj1YAFluJ+nHH++guWA0Sdq6xbIo8/cLI9gF5PLLrxWwekHjvuUDKkaLG8tf06GVIyQU466JKh25/2/zsgPPdsHi0QByC0kuIUgFoGOmlIkzzz/oDz02J/kxPeeZsW9WySa1RaAf87iUj4gWJg0Ybp84VPftWxW/Ov7rpQxw6fI5ef/UsaOqJZD9z1V/v787bIYi2V539h35jFy0OwjtM46fKxo0bL5wbaSJij8MMD933N1Mb58sd6f8MnRstIyKcfDQEVFpVRUYitY+MFza9GswItuO4JVs3g7RLzrqhRsQe+6VHd7xopXdOiqzhLR3WnrrixLyE7LnL3fKDlmr1EyYUS5NOOrgG+tapBfP1krSzc6v7kHv3hQli4bt7bKg3PXyO9fqpOLDhsnHzpkQlDOsjdrt8jvn1uTtz6Zn35zvXzroWXSnexAKBLWzs8fWSIPvI6FWj4Y/eQfuFdu1cMGyCePmiCzxg/BB0mKpHZDkzw+v051ZZXbPrWPbNjSJv/5hzdVwil7DpdL3j9VPvbzubKp2b2mvuvS/eWlpRtVP99MHHUzAv0ZnFPtL55QLQdMHiI//uty+ePza+TVmi3yZfiaf/ywCfIT0O55ca1cevxk7eHkkeXyf+fuId8ASH915Rb56h/flG+cPhN+vJgpuglvLl4uTz73knzu2uvl4cefluFDh8gRB82RlavWyKP/eEaefPYlueNn38pyPXl94VIsDMXCxB7C9268FR8iuU259pw5Vei//sr8t+RH/+8OeeCv/5R7fnW9jBk5HO3tC1CS1vZGDh8qxxx2oNYZP2bH3XXSADwG0InAUgDoYfeWQycMkd0q+9Z6Hh6Wxx9/XD7wwdN0kqceBJoM9EtvakpKPYDoGIDdK849V6748Y/dolGUD4OFvBlAbhvdQOgnEATchymDFnG6ozAQARJo00+7YbPUoZ+bijfIUCzWnIbFpAS6W7DbyVa6vJCXANzqhMB4lgVdy1V68GcAdK7EAwV3aNkGEF2Pfd+bqIPJCMtmOnyQx1vx27CTTD180kegj+vhH5+Ga0sZdP7saadJJRbDrVq6FGMDv/OWZgAT59biziH7KfLiC88L31D0i+BUClTpMmxKyIBTZldi+8jZs/fEucbWkTg64LudhouLYNP+NuxfnsLOQ4WC9PAuJZ8+92uBHuHEg4/eDf/zP+LDPf46yqgjZ7zv82HWIH3rg9foFn/bOtfId2/4L7n2K26HmPfsf5bwCIdb7viZPP3SA3ANcfcanMogcO9vbhUYvoRpXbavao6bXiw3/uZ7OQA9Ux4IypMIW051F5cuPugZZU4+9mORUhauxGJr1Jswdmrm9wmg/N5DztMjt9L3f/zfQt9164OV96SL8UXFDpwXY5xgOS8tl8rywVJZOQRrT6oA1IfIksUr8HPCQzSuH72kIMRik8dLUWlMWAilu/B3U2bVd02cD5/mw648x/nqFN4D7jEfFcJ336jygMYLe0cDZUTJoWq5JzDcVndlYb6dlf78MRPlfXPGKGAmkGUgWP/uOXvKl+94PQDZBNRPLcTrXgRuTffxoyfL6gbnp0fad+5bwEjGDSnrsT75ajdl6uaT/eSSrp+cPh/t1m5ukVdW8ZV7diA4p971eEi465kaLazGgj/qOnrIALnh8ZX68LBfNV53+7D3RLdA7/27D1cQf9RUB+znAZzFoecR6O/g3Hpw1KzhMmtchVz/l6Xy+qqtcumt8+XiYyZJObbg+ueCevmP4yYHlj+Ccfqmf/uBRfLC0ga56s635FtnzuoRpLMtgvOPfvgk+dZXLtUdJjgZ3PTbu+Vr3/+FfPrL18mzf74Fr1ozr3hNv3zx3556TsE5F5LSEn7wfrOVtRE+xV/6xg9htX9cLvnqt+RevOK+6NwP6UMBHwimTd5NfvSNK/KJ7TWdEx9v3xqQ7li1SFLDJhpFxpZm3AACYh8m1sA1Zd68V2TvffZVqRxXWo0JPBmo3zoAtnHwR//2JZfIldgffSBAcMuWRmnijis0AfLmqwCXIBd5IqASPFTYjRwfPkocBGMEdklREIzidrhM1AHE1gG4lwP0VsEaN2bEcGnHWwzdEQXuJS0A11zEqvLZBkD3IMpG4HxAN6cBsMIPwgMEd2UhPy3yS2AxV8s36+Q7DLSHY/J6S3470psga8TAQXCV3ypXfOQjMgM7zqxeAnCONxwt8DvnG5d2dftAv6ERz+R69HFuH26ryH4G1wfS3YYcZnbHD5cOg3M2wl/ysYwxg4+VH9lFCxfIoDM/AtcWgPPOZvig4yEs0Y7T2YkHN1wb6vlTGEjn6dvc4OY3tRb7zjRs2Sg1NSvloUfvldv+cCP8rAn+VBvtb1YdR87627wVu7KAfxT2Hb8ZC0I3bl4vZ37wE3L4IccFfP+fvTeBl+uo7vxP99ul97RLXmRZ8oJXvIEx4AWTEHYCfAgJQ5Y/CWSZZBLIZGb+fxIymYQPmUAWGJIwkEACJKyBBDCYLWBs8MJiYrxhy5u8ypIlWbve2t3/3/dUndu3+3VLT7Ysy1KX1K+qTp06derUdurcunXvvOfH9nGdzf7IJ/7WlfOgD0LQV7dxOqQFDJkF7jJ94OjOH1xvn/jMB+1lL/oZp02dIr0orEsAWkGXI9rt+WSsL9KxcEd7lclNT6S6Xn/zN+xzH3+2/ewrfs1e/IJX2TPPvbBAm9ZG/+rrvmkf/YQ2Iz/4mp33Ij3FanP74qUNvYgWynmfbveRcj5veNTG9D2Ghfra6gLdHMPvvnVXpX6Vc6U+lhT2glApEF2vAHmGItYMzELMSd3gzZxPWIj27+SAd0qjjTvBO9HYGwz7QSenrtuFo1nYXSjMwju8AeeunO/K+T9feW9hYabGX9PNFn/9i093S/Qffv4uF8IjUsZDYca//PTldkrptotIm0t+J1j60412mWago3z/t5edbG/+2C2FxTvSsJyPT83YWz9zW0vaf9q425X0q+7Y4puMi8Q7ijj0Udax+j8dRV1PBKJO19yzLcj2/C4SeKoo58E+/L7zdafZp65bb5/87np779fXSXmq6L26hj2wZVw3ZzQV5yHdQvKHrzzF/vcX7/SXR+eqpJ91+sn253/4luLsOYvGb/zSa+27N9xqX7niavu3L39TX/7T7SdzdH/1dx9zzL/8n79bKOcAeMn0b97x/9ota+/S58Fvsu/q9xxdz7g/yv8cWUhooSAS0yLV+N6XbOb4Z1hcv7hyVNPvE+yuu/ZaO/bYlbZs2XLpaklB54rARmNKC4u+ErirYhvW3afPja+xv/qd37G//sxn7A7Oc7Pq9GnO92Mp+PpRn8U6r/vQ/XrBUm/s4RYt1lc3dWwHa3v5OTtpWrz26PH4HizOyouiPawjMsO6JWIFL5JCMy/eWNCXc2wlu3Hl49H6Izrf7pbyjFfk6RQHBo/hQ6scD7hgKOmD4uHtv/Irtlrn59fLcr5zu6zyenLAzS/xtVAREzmdBdZxl69/7avB3uP3xWqLdo4oJC/9p8hmGmEcCWV4RMswwvEjqLBH9ccVdvmbdbb+nnV36fjTca6c+/nzqo649Nd1z7iakY8X6WVP7vDf15n0y674O3vve96nkrq7ZcdV7SgdJwn3W7//ctv2CJue7m710/v9o0RYiVef1W9f+PIn/Mdxi5XHrLYtjz6iG5eSYYyPAy0/vqnDvOV/vtq2bkz0z9aZeL4+OjG1zc57Xnoidtxpfbbq9Oa4O+70PnvbO37Lf3B08jP7i5dUu3OYUv7gXb9oWx5KZZ15yYAtWNbkA4wvXvVB++v3vn+vZEYXV+ys5w/azNaG+NxlH/ynd/tvTJbr5cuO9kbc8MhD6pfJuHbSedrszNbPbV+8dGKC6zCrOqfUj3I+oJfBh3SsRTdMLZy/1BaNLdWVjku0qeizq6++xrPTn1Kg6XsfEzyllZT2wM2o++s9zuz7W9whgN/ad4Kh/rlq/yVbUOTdf18LL4tvuwPWCd6OdyjEz1+tWwrkOKpSdhz1uP6urXbJGcsL8ApZxlFqcefpRTvcHVJ8Q6F1QP7TKT/HYMpHYeKIC1m60S7TjDDK9wffeK79kZSnOKYSaRxr+c6PN7Uo56Sx4cCKTn0/dO16e7OO8VCHHRMzfgzmI9qg/LLScWeuWqhFfecsGp7Y+1NI4KmmnAfjVY3Pn79wpZ2nIy9/8eW7bWN+CvQv33/IjtU59HZ3oo593fzATrt387j9r3+7wy3pezuT/vpXvaRQzsu0XvfKF7qCfs31N81ZQd+2fafdcMtaXb+22F72govL5Dw8IDPXz7/6Jfb293zQvnXdD11Bn4V0gACz5jQpPvV/e4fZGZfofvCX2APbxjuW9K8dnoJ1RJwjEMXyp3/6VbaAG1a0ksZRF16cTLOxLK93r7OjV6+y/yWF9a0f+EDrmXQvR0smi4UU2EacV5e1vaKjQ64EY3qFmM/vBPIS614KT0sJn5aiu1PJm2Jlh7bCZ6xcaffq5c2OLq3+SQtoDwedst+ulJNWhim8Qkdw/viNb9THtkZKyrmO6eiMOhsDrPQo5i4fZf/aV79y0I+2wHaH5dKVoRa48NpxPZ5E601BPP0a9q0rrrDf/u23WL0yo+MtNavIcu4vZ/Jhn8k+bVC4mnNKivq08iAH/aI9Sw3EEZLBYZdQCSpLshRIjmEsXdnX8euanfKUCfDKQxzhWHWG7uOeX/GbTbY/stPuvOcWR0XxPvrEqhT5prJNAkdNgj5XGAadApaPvUR5i4+Gx7pteTAp2n5uve2oSuC2++X6d8pXTm/PG3GOCcHjslV9tviYqm24u+ZK/84t2223XtDHcW7eZXlSVTjNzU7QwC+X1YmXMm5FG2leCOVLxwN9Q7pWcVhHW8Zs/shijQcp56MrpKQvszF9FOqqq65MWdV/6ALehwgSx2V4S/fIaQVOO17kDTg+TvCWPAl6UP/OmrNz6d101G7w/WVaTdzRtfbujig9YCcJLB7p26dCitWZH45z6ljdsUB3UtA7lVE+xkJ6+YhLN9qd6KD8v+Pzt9ufvu5M+4OXnmBY3/fXccb+jFULdP5zxs+oYy3/zRf3+QbklJVj9rnvPri/JI8o/Keqcl5upNN13OXPX3e6vyi6R/35W7elx9tlnPbwndqQfvp7D/mtL+1pET9p9coItvirjpUFSW7jpub7Ey0IHSIbhItidcLxK7tu+k9UGm7DI3On26GofYKqxWpTmn11k4j96N9tdPEi+9EZJ9k23ZSzaKR5Vv8TD07bezY1Lcn7LGQOCJyZ/trXvmI//cpX5dsgkpIei1FaL/VRH32kZ7mOevzv3/gN+wMp6fejiHNOgHqg4BLWeXK/tw6YbkRpzJtvpmMnbj3nOT+WcXCxqJcd+PzQLP15bg4Dk+NWleIu9ciX01pW7aBT9p2AyizD4CHihCMuH+X8Hb/+6zaqDcZD99xru1WnPXvGdcpmUuewp30Dg4JOq9GXvnXFN3VN+vrg6qD4SKXUa5IInKEkQqqGVRwfxAiX8yUcrJpN8xqwW265TddNPmjH8LEmvTxcqTak4FXVrLoDe6LfP2A0OTOupwhY0rVZ0Rd1kqIOdZWZtbFVZ1Rt1RnNvuuJ+/hzzk/N3tDvI4uUcBTxAX3nSlbm3Q293NxUwtvznv2TQ+0g3zBc9LPNJ33tCKc9d3aedpxO8TOft/d8q06XfE6fu3zY2KzWzTardSJvRnWdGtcGUW07OKIXzLWx2JvbGy/R+kmZ1DfhpZz36Zy7K+c6dz48uMDmDy+Ugr5ERxJX2IJ5+kq0FHT1Brv8S1/W0EmWce9r6gLui5nwg69IJ556ymycFtyIdPODSLf0IwA+55dE99495iYpp9Gy9U/5DtQuZG5cPD6s6+/b7lbtOH8d1FDYzz95sb8sGjCUVqzP75FSs2zBoFulI63d75S/fIylHX9/aJOX8+dsELCKczwlHIo3fC/+7kMtGw7qh6O+uFt0vvyXnp/Oof/grkcdF6v5L1y0ytOvuH3fypojHoF/DgflnGa7bf0ut6CjnONe/+xj7STd4NLuarWGffjqB22D3nvgA0ave3ZnBTzy7Wy72STge3QWGDekc8xzdfN0PRjOX0rskmm3lDHciK4TeyJdc31JIea/wTWn2Ypf/UMbOes5hhR/8aY99vKlUgqlGF6ra+/GtXC+52nTdukBZmyL7gi/8ltX2Itf8lJRZpFu+DEOikEJ5YfeXL//fltx3Ep7p86kv/uTn7Tr165NijnWc1d0hXSUNk5jo6ZrNfSyqOYSXtYkXV+lTL5qBgzHfB8refgpJf3VOXOZrFuvWSQlcPfmk9bpF8p4pEVc/vFLl9rb3vQmm68+hXK+S8r5uF5wRTmPM+fIQoSd9M033Wh36Nz2QXOUXVojnRWJkL5TuDIOrMo5yHluPYcOvPzzoy7Cf782YO/+i7/JynnFP04zoPuv+cronskhP24xOb1bCnqypLcr6cjnoDvp2KM6VXlEOPYTB6SuqefMVs4H9QXoeTraMl/viegrwcNYz5fZqCzo+PMV/9gnPuLfAkDe9CH3tdclEnGHJZB3CdA8Lfc70nEBz2QKWAqIngee/D9htGjnxOGlcVlO75anjLOvcMv4LiH3LOglYcwliKL79Rs2uKLLy5T3yEKI4yXREU1w3OTS7v7m39f5i5i/qY++cAtLuDj+Ei+JtucvH2MhDxb0uCUmaHSjHelln2M5vPjJC67h4JeXRN/5s6f7zS3AqRcWeuoZL5Z+Xx+p+SWlcWvN+7+Z6nDrA2mzgsLfzlfQP9L9w0E555aTOINOONwleomUr4uW3YyUc86go5yvUdqfvOaUfV65eNX3brBXvPB5ZTIevub7N7h/1mknzUrrBjjumKOMl0PX3n2vrd+wyY49unnkLPJ84+ofePCcM54WoCfEL2Sl2beqqweXvel/2sIXvralrM06+/lRvVs9KuP0zy0ct19fg8Vt7la3FmL7iNx7772upD//J16QFlHxxVlrHAoqyyiW0rruRV8m6+of6ArGr153nf39F7+YFO9Q0vUVTl3zYKavkrpCHlZzrmTUERHXJmMxo7+Uw15a6Y+ucpN5cLaCHijR38o+4fZ4KOGRFn7A5f/cpZfa67nnXBb/9fes0wuiu/2F0AnVPb4S6i+goi7o/9rbb7Nrr70mODloPqy7yOQXmjlhfri8moNH2JVu+Z4v8OR7XCiOR5yHCsLDIrpp42b7t8s+aa999euT9VxHvwYGB3TF6bANT47ovaQdOuqiaxhlSZ/2M+kcd6lpEwcRFCoK6rlDXQJuPVdn4l86c64z7DrWMtivr4RKOR+R9XxECvr8ocWunM+TP29oka2948f2jX+/Qk2tlnalPPcfVZj+lLtB4QvicJdHuWuQvxzP+Q91uR0q/M3Zgn5AGGbWicm6TLAbvIxzCIW52WTj9glXylFk45rFd33pro6KKsorZ7a5mvB5+VYXqvP/vepUr1Vcs9iev3yMBcTyGXTPqD/ttDu9JBq4+PC+ZsV841gKjvzcPMPLoq997qrimsX2l2DB4/rFpboWLpT2eJrA2fuemy2Bw0E5f2THZHGLC2fRf+6CY+wLN2y0QZ2dPH5pq3I+NVO3d2oM8HVRlPO53uLyqS981V7/qhfbM846rRAiyvUHdJML7mde9oICvq9AVYf5fuE1L7W//fCn7a1/9jf24ff8ccv59qu++0P7wte+5fegvzyfUR/QF1Nx23mZ8QC6Wl6Zlvz0r9jSn3+L9evFr07upSO77PeeptsTtGg+0W4tFnG55//ET/qizerJmXQWYlfSeZytX33mQZuQdfmnnvUsO2X1anvHP/yjbeNlUI6xVGQh1zWH+uSgtD2FhScigpOWa8CczsLcEm9bqUHdopdNhVvnlp58y0qmkLxY3Tv5wPb1k2I+JOXzrW94g5116qm2+eGH7VHdAc/1j9R3Qmfiqb9vVLyMxOPatbfZlfpa6BPhKAbxFI4iy3ESyrByOGdyVnM2pweOfoQD3cOKVBRo1FWA/gcu/uf+9TI76cST7PzzLpTSNiClTS/wDo7YyOR8V9Anpnf6h4xQ0tNLozN6sTRt6JxQ5qXnHcISyB2Nl0E5c96vJ3RJQcd6ro8QoaAPyoIuxTyU9c36wu57/897S8p37lf0rfzzGhMmEDAiGQZe4TI8IWdoTm/BKzI8iYGWgVniA3intG7wUta5BNuHf+SZswW9G4EgNFe/Ex1gneBzpflk4GGNbn9RtMxH3DEeMO4hj7vIUaI5+rI3156/jNueVqZdxqOMTuW0vyiK8h03z5Tzt4d/Q9fslR2Kejsv5fQjOXw4KOffvn2L34POkZaVuo7zv7/0JLtLT4wmp+v2gjNWtMxX2/dM+z3oHIM5WU9g3i7L+b7uQY/+gYL02l//H/Zrv/AaO//s0+3eB9bb+z7yL7qibKe96fWvttNOXhOoc/J/91d/wb58xTV+t/lPv+Et9ss/99O2aMGYXf2DG+3Dn/6CWxDf+bY3655fHdOQO0r3oR9z1DL78R3r7N26AYZbZbhm7+U/dcmcyuuKJIvzyJkX2PI3vc1R/BPzJeRnqPi3LN1lp6/orLiXUA9oECV9x46dftxlSOewWYmToZlVU2eO9bchQE3K99TElB29aqX9/R/8vn3gs5+1K/7jPzRZc5xFCjnHW7CqM3v7QkWwNJNHGJ+VuOwLtewaOubCUZdZLlbwTj6wvf1Uh/NPOcV+83Wv0yP7YXtYTxB2qk9xxzsfIeIlWSzmKOdxrAV611xztd1y882zWHkiAEgciVENl1xJfJTncMTnEf1xZDwyREIzHTjKuNNV07ilU2gcX4pLecKKroNO9ld/+R775Tc+Yi9/8Wt1zEUfqpmWgq6r9iamx9yCzpdGp3UdY9zskl4YTS+OwlLPHeoSkO1c4zWdO0dB10uhMgQM9A1r44oFfaFuVRpzZX1I/m1rb7S//Iu/0p5bL4Or83n/4aFJenAiXx2J/y2/DJMogJfTZ0mH9HDlcMDafKfXBnsiowyvTg54p7Ru8E40Hgus3wf5XHIebEnNhaceTk8Ch6AEDgfl/N1fvce/DIp4X3HeUfbGS1Zp0a7pVpa1ugGgYq85v3lM6t5Ne+zt+kgRt7uco6s35/ol0Wi633nj6/0u9Pd+6BMB0rRU8TvK/+S//+cCNtcA1yl+4R/fbb/9h39uV113vf3HzbcXWTn+8qdv/S/2mpf+ZAGjrHf+/u/Yr+nO9T9//0cdvmLZ4setoFdlkVzyijdoUUPlbbpjhlDMd9sLVnEP+sFVzoMLXnr84mWfL14clc1ci6uu2JOyitLKFXsz8ms1XUm4bkq3Ky6z3/yZn7GXXHih/dU//7Nt3KZ3U7h6gLqhKPJjCXOPP0SzH2HWkDIs4PL9BdGQU3mtaQ9HHD9+0CEc+eUv1JWNv6aPDz333HNtx/btOm++zl8E9fPm2lhwUwvXTcaRFjhFIeGGk4N65hzeSw6dBYs3cvKw4jnaxIqEnOZiBxZxfP1SnXJ+ESms6LnJkgJWsY9++OO6432z/eobfscGB3T0YUaK24y+ICnFPCno+pqqzqJjReeYiyglohTYc4e2BPJ4q1b6rU9W9L7qoCzow66gcwZ9UEp68ufZ93/4bXvXO//ShxF9rlDKc3OjnDuczlX6tcOIu1PA00CHRhOcQ8lzOOkE8FtSj5BI+7yYq72Pd4ObwjlQB+E70QHWCd4svRfqSeCpIYHDQTlH0t+8dbOsKlV72ytPtmeuWeRW8z+97C7bMT5jP6NjLsfk6xX//eZN9v5v3Zes6mcusze/8AQtACXFbA7NduLxx9o39EETzpzfue4B40XPS579DDt+ZXMTEGR+8OWPiX46kgIMyzewIY5blBzXLH76/X9mt925zq6/8VbdI6wz8auOtec955kdXw598fMvtO9e9lG74prv62zyuHCPKVF7bEG+JFoZntdyO8m8iR32vpMHbdVSlPMn1/Hi6Bcv+4KU9Ff7i7isEXHcBc5YMFHUp/X1TT4ytFtHgFYsX27ve+tb7QZZ4d/36U/bNp3jdqWbzLHIhF9W2CEW8PBL1a9jPc/n4Quwr9iZkQACK8Mjnn2Os/zya15jL3z2s3WEZcrWr9OLoOLRFXOs5vpIE4o59XTlXPmSwmkHXzlHE+kyVKiOiylw8HERJ5hhfoMLe0CGBcq3TOXdrOhVpWNB97zKj8++5stf+pp/tOmNb/jPOv61VJuzUf+QUTp/jnLObS4o6Fy5yGYuF64ie+7QlkBY0F1J92MuQ25JR1HnuMuMrkj9zOf+yT71yc96f0AxL25uob/wy32F/hdhN6Z7pAmjV0S6S8UBTfmQhsteQk6gQ+JvNz10bzpqtzz7U6Eu04DN+YjL/hTWw+1J4EiUwOGinEfbLdT1fyjnG/S+xbu+dLfdsWG3nbVqzP6fC4/zqzo/IMWc8+Z8uIgvjL7yGeljIJF/rv6wbtTgfvLnX/gs/+0t36pjW8tAWW+HlfOf/rQTjN9cHC+U/uLPvHwuqHPCqQzNs+lNG2w4LLvK9Z90j/GhoJxHBZKS/nk/7jKm6wd5mQzlK459oJChzNak1HIF4YRuPBldsNBOO+44+/Af/7Fdd9NN9vlvftPueFAvx6NRlpXvTuEyDCZynA8VqaDEVqziwWTEy35beIXueH/dS15iF593nvO/6eENtkuW83RDy5SfN+ce9uYTgnSNIkXwEaJrdazlybScR1VbfLSYrEwjJldqMoyI29iV4KJA9I4gPClUfH8QBUo3KHpGhylTA3wUsISCqs2dPh7/9reutRt++CN706++0X7qea/SefP5STGXcs7Z87jJBYK+qRGNnju0JcB4pqegpPs5dM6iY03XWXR+N932PXvf//1bW//gxtQvNARdOUcp56f+436b9dz7HGk5XR1CkYTrElGCp4V4Ij37gJ1GpLf74PWczfklUU4aPl7HToPH47Mck0YneEbstdUsifUAh5gEDjflHPFOSin74JX325dvfESPuutS1hfaG3TU5R+/84B9JcM4m/4/XnaSX6f4WJtkSLdHHI6uPrnHpjbcKws66lByFxyzd8u5HzvY68oVlA6cj5L+2c/8ix93WSYLeVo5pbRpYzGt+5g55sKijXKLtW0Sa/quHTZ//qidefzx9pzf/V27d/16u/L737fLrrpK+gDaYmmen0O4xYLeXv+Il/0cvujss+3FF19sp594os7LT9ijj2yy3SjmegF0Sj94nZbVnDr4RkObgLL1d2Ji3J8iIIMn1WmRY51Dali4Q3oFTAEXIwB+OCGFSFqs6I6jO7RFiHRPy/n8mAIZyZu7ZVlJ37ljj14Q/Fv78Ic/bC97+Uv9bPqiBctEJ1nNk2IeDCQ2en8PdQmgpqOkJ0V9YnLcrrzuK/aZf/mMPbx+o8Z26gu8711Wzh2eYYGTlPWE73MVeVV9+ln55xLJ3cThGaeQVLkLlcMFwpMT6KifihXgndK6wfeX++YK0ZqzZ0FvlUcv1pPAfkvgcFTOEcL2PTP2+R9uKORxr27xefM/pxeFh3X85ZcuWqmz6MfoDOOB2L4XxRw2ASzoFT1SbrDyZfeQPhp2/qLmEZ2As9ihED8ZCjo88MIkx11OOfU0u+iiiwWRKiZ+WDiCtxm9EFoTDEv69OSA34CyS8dehvUC5pg+vPQLusLw5/W7bd06+/Fdd9m3r7/eNnIVYyjo4VNgOUwZZQs66azqZZdX/4Xz59tzzznHzj7tNDv7aU/TrSODevFzu2247wG9+Jk/NuRfA9UXQbPFPM6aUw/oovyicN6+9nb7oXjkQ05PpqOm8NTixCecuphgW4luIUexjgzypYK7LAsYDabhmJRypaGkl1b/FGxazWPklpV0YDu26wNjn/qslLjP6oNGR9ullz7P5o+Oqewkv1kMi6+WOrREcs3acTK45+1bAjS5d4J2VE9IwG449A2Ucz7I9R833GB3rL2zUMpd4VZ6i3KuOHlI4ylMhN0HtwRzniIu350QHZcIsPjleKCBFGHwiwh4PecS0HHRTiOpg3TmitchawGChr/1X0CaAW+hZrQltLe0FsRepCeBgyuBw1U57yTFbVLYT9GHiS4+ZYm96On62tzI49vfD+ujKAtG51u/jrccjq42sUsfIJpssaCv39NU1qlzWSkP5dwVySdBICjpt9x8k24+3KwjLy/JXx1lgU63vMASVxP26VgR1vR+jrz0c1XhhD5ostu2yno9ousSVy1eYqc8/yfs9S97mW3TdYz3bdhgD2/caLdKad+kO8jvuO++WbXjS6Ii2gI/askSO1kW+jXHHmsrjznGnqbwEh3D4YadSd3EskMvNm7UdYnwzRl53ziIp5najKzmuhIwW8uRp583h3rWBK655hqva0uBBzECG3NaUlFc8hLtrCvsinpoNor7zRo6ZuZw6qC0FqVcGrcfdcmKOhZ6lKwq1lGhz1LSlQYtV/KFsH79BvvUp/5Fm820YfDbNOGDnzK7rzB8JittgnscfjJeDqZ6Oy6QNged7FRaBA9Lv6me5upJ5mWXu6qDCJPs7ZrD3s6Eo13VqI6XYZ4/5yFc1zcqPF34KZ588pct55GWrObKk/Fb/dayCl5Ujrvse3kBijTFgXdyZXA3nE75Dhism34KvFPa3nTa/WCqr0tl57wyHoihAo1OdLrB96N+PdSeBA66BA5n5fzy/3bBEy7Pt735TcbvcHUDI6M2fc+tWuDyCkpFNRGXFfFDSUGPduCGl098/GN+V/oJOjoSawcKb1WLVBwVwUdRR0Ee1Carf6Dfb0rp37ZDH73Rh28EGxqZZ8ejaEvJfv75z/KP4fSJRoWfFrdYD1D6XaEuyQhrPYp3TQq3H1fZtdse0CYAyzgKOC+vcuQGHoBxjSXKOcdZykp52vBo6VdF1j+0Xh8futqe9CMtIWw0khCCgsia6KxjLoGXfW8TRxS+fOJ0M9ch6G5o3eB6AkdIFcaBJ8W8qgBXo8f5c5RxsvBxLVe6lcFhAkLOlXDSlIejM+57mET/n5X1hEMm2hfnHjhEM25KyDBHckiAc4QKNF0m1wQ8xUI0RSfXAs6RAldxBwVcco0079ekt/3I4LCMW9y+UsSb6a6Yg0+afkkpDz8p5z59tdAsKe3AVangiYCXTUU9IfmRDihViMCh51KPnc1X7rqzEwTplqcjchegy6VDWn/DR3SHlHZQNwrteHuNd6tKN/heifUSexJ40iRwOCvnT5pQD7OCq9KEKlrd/ArBXDeUSFdEfSFLynonJf3JFgVK99e/9lUdbzjWfkIfNRrT9ZSsrGGJRlFPVxXOZKV9xipTVX8aQtqAFO4+KejVnbv81p0qccGTcs6Laprz0/+mlpZXcV/XFaYsFAheTvTNgK75BDYjGdaliOOn8/HNu8zbFfO0sjR0DGaH3XTzjQftfvPH1H5UvLwU0kcEcJD+ZPEkubmQmrrOrKMuOT2ZyFGoRMA1cJWB0o2SrpNWyBcl3WEUrzS3nsvk7sq76HhcKOFjfkdt8A0W5ZTyeVi4kKwoQyjVhXIeAFDAw2W/iCdoAY/oYedn2UW9ivYFoLRyvKyMe3Kk45fxMzxZu7Oy3EExhzZtT2YU8MI6zlMVwPoTCnsrTspD/iJPQV/AzEvwnyGpLpGMLwIe1Z9yPYv8HjiU/kRnbecJeLe0dtzu8YaeTnVy+3HNYqfs+wdjAHZioxt8/6j3sHsSODgS6CnnB0fOT/VSpiYnrKIjIWUL+ve3TNqvrhnUosTi2forK+qHSt3dmv6Jj9kpp5xqF150ka5j1IeNNImHou6Kg5idmtKtKJrIsWbzNddJaXpYxVHEsZb36QukVcHSMYlQOpMltr2uvmBr4caaC32Xi7QILOpJRllxV5x0lHdcyLNYY8ivyPV6efVmHd1h03GoOpSVgu8OTHp6IMl3i7j8Io8CcdSlOLcixQnFm3icMY+4K+QSGwq5coqO/omeRzNR5E8B1bCYK4ojD8pZRUp8BV84FTYA/M+/CKcMnpTTExHwyq4l3pZWxusUDkt9p7QnAxZjYs5lZ7kGPmIPF2H3BfeknF7AIq62SGMAP7URdNoV6VDMA6fw6Sco5jkvirsr2tAN2hEup4Ff5oFsxPOvSBMoVYBAm8v526AHPdqt63m/7sBN0d87pO0PqFu5OuLSLamd/CEiwXa2evGeBA6iBHrK+UEU9lO8qH4ppvX1d7ecQedGl3YLeiiW+KGkH2pV5wpCfk8/62w7//zzC0UdPuEZJSn4x4Le0LV8+Pxwbm0VToqzlqCcd157oBMO2rh0iwh+66YmcMOHojB0deKEXoZba9df/4NDVjGnmi6CJA6vZ6prWpVRwvloUScrekjOJUVEYnLFOUSH2BB9yW+ggZct6ZkIKJTD5gkFCjphLSdcVtSF2kzzjIorG9ZyVInc3KltHU6OhJMCpbAnODSSmpG2tNaE9lhUuh1+iMfb2G6JliL0E3fyI+y+x1Micf/RJnKFUk5yTnPFvJwm3MiTfOafZl7yNePqh21pRZleBuPSi0p/cjhwoIUjzh+PZpgnAI7AEelrsHRwumaxA7QjaM6IHXM7MI3kzulzZ6Rz/h60J4EnWAI95fwJFvBhRt4fE+/eqYUtWXipXl0KEkpnKOLtCmfAD1VR8BIpPyzqp+omlWOPXekKWijIXkcs2louanopLazbSWnnaERS2MHrpqCTFvSQRyj/wAgDa3G+6nsu27Fjp46y3CTl/PZDVjFv4b09gpbSZan1JP1xXzgRJ9C0qCeFHrLozOCEkk43dKu3kDne4i5E6WVKQZMf1vRuinpS3tlgiQL4+UcYJQ4XCnuRlsDeflE/z5/h4XWCRVrkK+JPtYA3Rmemiy5cSi5gtGMRIZx+3u6ZpidneGs4Kc6B63lRtMEt/KxcF/FmGQlH6aS1pbvyTvkiFmUW5VCPzJvDynHC2RX5CkAKODxgB9Pv1gHbO3Lw1A0e6XP0GUqdXO8l0U5S6cF6EmiTQE85bxNIL7pvCeRZd8+PvmMjZ1/k+Gu389JjuoubRTcUcsLl376JP7kYYVFfunSpnaqrGdeccIKNjemcutcZazr8xQotHZE6C1JWuPdWg1DKZ+E4YSihDcqXN6mjRGulkN+rr4ZyJOep6nKtnP1cNVe8y1b0ZFUvql5SzJvS5jw6VncUKPZD0A0lPfnqdzUp2EqLo69BNynlbIQkWgFD/wiLOvJOsCT7FBZQjnCkd4onWMpXpJMlZQfUc5JAGjtNnwYMGALysDdqEx7Kc0pvKszgBn6EwYVmcdYcnKx8R1mufIMngKfl9MAr9sgi2k4fGkHH0xKZjEffTOl44RwWkSfR79YVc9eexVk3+CzExwjoP+ijo9to7AZ/jBXrlu3y33vib6foVnYP/tSUQE85f2q226HC9fYP/ZGNP/25tuhX3247dQy6rKB3U9IPFd73xQe3oVx77TX+Gxsbs9Vr1tgJa060pcuW2dDwUJG9WJS1oqVFe+9LcoEDGqtgRkeRhMD6hx6y9Q8/JKV83aFzI0tR28cQiHqStRwukUImsUwm+bSIxsXUzI4ilJR0z8ODCxSuwhcxxetKRKSOQ0DOixeeH3sRzN8bEC7KO8jgBn4Kw5hnzWkp4jiAAz+hpLwZ7l7Om5OPeC/atujzNEh2npbjgZc29oHgw6NFaSYlFGvy+C+fNaeMFE8+8aS4E8/KOTj0nYwbynncDhNw6HgYL+NGXKBZzvFnQZ9kQNFp2/hIHb0NmKPd8nTG3i/o3F8S3S+y3ZE7jUVgneDdqfRSehI4OBLoKecHR86HYykscCxQTG6TN19rM7u2W9+8Ufv7u3bbLn2h83dOHkqLoPDaFfWnojz44M8tN99c3JSCdX3p0mVS1pfasqXLdW590BV3n+z3tTqzIAiHO9kn9XLnZvmPbtnsR1ieylby9nZFDOX1PXcXR/M0xCBZoCw7orywdoOLi7WzHCcclnRHKivnLltBUbj1omejzZru+PrjNEqKOgWHnuI8w1cuvDWeLPAFY6KV8gWnqYTIW8YjpYAntMP+L03b4krxclqLIk6GjBc47guGXw6Dh9INsD3NFW+S1D8cBR889z1LEXY6GR60gGXSHmjSSPwRd5yMFHHA7hzQGnbeM+hge609tFk6cJ7quQCbYA91y9OGttdoNxpzt6CXBbnXovaW6NXsgtCNxS7o+wl++bu/v585euhHugR6yvmR3gMeb/3RbtICxuQ+8+BdVj3pbPvHu8ed8AsXTdrJi+alBdEXz+aRl8db8qGQH+u63zd+x6HAzVOMB9bb0pLoUfqIgIDblXRq53ACchHuqKRDTF0TJcyPrvAVI4ULa7qSUZJCH8HnB3IznJV1gSkspWcfkOOTmMIUyUhwOEHSO7givUPa4QzqqpQmwbXohQWu0iIcvivDKNESlsP0J9JC6UaOhMN3XPI4Pf6k9BTP8CKdzJmm46d0z+MEu8WFXHLOUwa1ppSQnpRgl47pHTZ3dGc+mCt19AA9Fr9LsXO2oHcbUPvFy97q0oXB/aLfQ+5J4ABJoKecHyBBHsFkUKfKLt0tnFdGJexoDHc97lLO1wsf3hJgvXfFlO6idTB7XmlPIxTrowBzVdKdgGdNeTxO94NW+FjReYcZhR0FPFvJwfHz6eDq5xsCfKIOayrbKd5BYRcueduV7iIOnewCBv0j2bXofiVhlOEezmkRDtQUzwq0BEm8UMZBIh4+0ULxJiHHMzxwnUaRL9PO8TKtwHdfNPDLzqNBp5xAuA23PfmgxUt9slxm6uMZQsQrrjj4XfKU8+8r3I3EnK9ZZCf+eF23unSDP97yevl7EngsEugp549Far087RKo9A+0gKbW32MDa84sYOs3b7WzRhd3fFG0QOoFjlwJsOTGyo1io7BHpRzMRUkH11dt/eH2FtcppHXjo2P4mfJQzqWoOW3wSNMPizrA7LkST2NEOrRJI05JhHHu50gB8wRP9j8BL+qXkwp4E/WICIW+V1TWGy7FijTBAtyE5XbNGR0OXkaMOMmE4wehFCYQYZBaw+Xz5mUagec+2bKiT9xd9lP59Fe5SCuFyyAHtwMAHkSXu/CsEnkCyl62YI+OqsqB3y3PLCJ7BXSmoiMue81VSpwzYilPW5BKdRuB3eBtJHrRngSeSAn0lPMnUrpHFu26PkVfdo3dO7SQYbpMbkNjxC3o7Te5zPiB0cDq+UeCBFBkfAlEA9AymT0PeJjlV4FCSSequINZVklrFxTpbhlXAt0OZPpWrLUZhnJFUnHsRUEvR8o6qL4ZACFn9aD+pDTBy2GiIMBQhD2U/kTRBQ8dcAIdMoezSxKaXUNXagOcIy0wpRVxESnCAc+EHU56plUo0YIUaZE/++3wFE8UPD+0OuQp8uWyHI1sSki5U4LjZZwCXgRywpPo6VLX4majFjbouLoSyW9UikoAi18L8oGLzPmIC7uHx+sYcN3o7K2N9pb2eHnq5e9JICTQU85DEj3/QEigOjzPyQwO9tvxK4+z+ccstQfyVy9JGJ/go0V81CedPde14R4m3nNHsARofi2W2XNB0CVcuZXvynMGuCeMBEt5yMBaC6xQzBV2mKclBa0hgoV+ocSyoi40P/ridKVsJx/6KQ/EnB+nl8qKOHx7YXgUWnJFPCvwJBWwEt6RHGwZ/i5MyTf7IZciXoKXYYA9rkCCtyrlrmRDLNKzD27Q8S/TlukQZlMHjrzIW5QDDBc0lOB4ZVgO47W7KLcdfjDjrp9mpuMKUsrnswGkMWZS3RMS3bubTqukOTvE2snN/SXRAzGKoFH6UEXBEFalTvBAOBRaLnjp+YelBHrK+WHZrE9qpU4/cbWd8/Qz7ITVx9uWrVvtxq3b/ThLMHXbIzuttma5R7Gah6LebbKOfD3/8JQAy1zHZRZdQEtnka54UshTBocLJcHkZ/GgPLTDPCnT8xdICZeOvXg56oBFXsrVrxkvK+tQayrsHsu4hJ0WHpmzC96cYIaV0wPvSPZb1J1CYE2JFOk5Da8MK8LqCR4WQuFDpks88iXcUt595YFexnGPiIg4rJy3jEMYVyCl6JP9t9HX51Zy+GAeDiW9Ijgd2bty1E2+3+yyN911rhVyoc9G7o8Pis1OaoWUxlhrwn7EOtEA5pXcDzo91J4EDqQEesr5gZRmj1ZI4IUveIHdeOttdsW11/tVgY0lx1rljFdGstUGx1xhD+XcFXSlzvpSZpGjFzhiJIDiosUxe0WAdTwUWk/LAPeUpVDIlehhX2Cz1IJYLMQRz0eqyhZ1T5JpsIUu/OhHdtIJ8MVQYB6V73AlBI+ODGrGcTzHzn+KPGVgCpfzzE596kOQbVdXSisFk6JNpgxs0sgKdU4r4MJzVPycB0AZFnD3cwSvgKOptuXxYiDSAU5GktyRHpHsR7SJVMKJfE+i7+MgM83QQEn3M+jqkJ2ebpa69mPmupse3t+Yq/ZfSPkx89A144GoYFfivYSeBPYigZ5yvhfh9JIelwQ++alP2+S0vkyUXf3hO61aOoN+0+13WO3MM60W1nPhsQDMlHAib88/MiTAMlsopmgyWYH1NTLi4GRxJIWcBHSlZOErFGaBU0rCT7gZRkJBJIXDoh6KekMvkDovGc95o5wcJ60It8CzglbGU3pyGahIUc9Iwm8ml6GHfzgaqlTTVpWriVDAM2hWHBrlNIWL3ITzz9FIKAjkIOmZhie1xVtgLXiea1ZZoAQwYTTjnlQAiT25LpTz8IObqjprGJJh18+id+zAkWP//G56+JzPoHceTfvHhNMoVcrHIhWHTOls5n5S7aH3JPCYJNBTzh+T2HqZ5iiBKSnelb50kwsvh1YqdX0Uhmszslt2glvLa7W6P05FOa+VFstA6/lHlgToAsUy6dpA0m98nYx44MgvlGRlRElHGSJ/oZBnHKfpRJIeLLCvvfjuMiAUdYiUeXGaQgw6nhZZg24uN4Ob9HM6zHl+IRTlFmmRq7Mf+TqnHvpQ5DUn14bXki+ntaAELIDyI0gg8rf7keDwTnkClmlEfqdJRQR3Dz8nZpCnlfEdz7EP8T/qZKGch08n7uvvVxWTIOJF0eLjYQegY3YbArpmcW6uG4G55U5Y0Ag67qti4bND6fT4YH/o93B7EpirBHrK+Vwl1cN7rBJo6BYX5rSY2Bt6w6qx8T6rLl9VkLxj27Stnl9xxdyfJAt/Yrr19pcCuRc4YiSALtC+7qP8+HqZAwVOxEkHKFdY04koE+9kphRPzIRyOOMUi3MgKhM8ZJJJcSnFPRu09XPiOY1ouGLzUAI6+VI8cDuAIsn9YKsFeBhFOtavDRht0WzMtnaVPAInfETk4RKgCIq+F4EfZXWApfwZ1wmW8VuPtBTlZbySR7BEpEQjpTzpf7FkV2RMKZRzZ7di/YLXJQSOH9JPCSMut6w/gVzP/SXRA8GERnI8JmBUU1Hifr5HAqj1Hu0eCCn3aOxDAj3lfB8C6iUfGAmExuELXlbUt200zqKH2zFZtZmRdJPLnokJ2717t923fSKSe35PAk2FRv0JpcC7FQG57DV1ayWmdBQID/lfV5RBLgiUwqCV01I2ATMcX7DCsk4cp7UbxU1eiyvHIwz5zE6B25atqEs7XpHhcA24cGZXbha4BHCFOWcphwEV8SKQED2aabgXYfwIO4EmjciTk5t4nidBO6ZlOiWPYJHfg0VGTzl0/kSnhV2FB2Q9r/KSKMJQPJR0ZxjcEv6BrsScj7i0D6bHxIgq6JZyZYZeWTlHCPWp5nnNx0S/l6kngX1IoKec70NAveQDJwEdXfF7yTA8MLnLr3/9H80u1F2kewAAQABJREFUeIVVz32hl7N+97QdY+OumG/ZM2lfueEO+963rzhwPPQoPWUlkPWBJv8oNFo4s5fgAZPveoL8wmoNAbmwpnuYhRcwP2jJDx0jYec0eWmRJpCc40bE6bRa2CMJpQaHl1mIpBY/o7XAIrK3tMA5HPy9yWdvadS9Jb0lUkrLjdreto5eTotw2Y+wF5aknfKlhJyswkppJdy2YIHn8CJzynvI/I2+q4qmXmw2NDhofdzuouOJFd7ZJE0+VThQFvQoq10OB9+CTgXlYKiqMEp6n3x2KJO9R7sum96fJ0YCPeX8iZFrj+o+JMCkz8omrzo1bo3vfNpmbr3aKpe8zm6df7wdM7zJrrhnk1191bdteuO9VpWxoud6EkAC3m3KqzdaAd0pi8eTApaBgV5W1KGDxtySJhhx0sB13cTxMnE84rjIGH7Gy9064QSegNHlmwltISE4T21gJ6EyuqV1QH/Kg/Za170mtskpt1U0mQsmYAGMOIkRbvOBZ1ARcDYyL+1pTiqA2Y9omQcPU2xLYkAPEd8HgXjMHRhtdWR4WAp60lXjXUlOe7hyDl7O80TUYM4W9ANVODsRf0SgSqGg83MFXf7gwIBN9ZT0AyXqHp2SBHrKeUkYveBBkYBOMqZ/nD33f8zlHHXRAvDoQ9a4/L12xQ2n2RX1Get75G6zfr1QyqNULQY915NASCAUmkIPQMHJinIRDKUnK7eOm2GdFHV1x6REUwi0wOXXnj+XoxR38FKAcsCzBbBEgwwBTrlLgKhUTijqpnhbUpH1SAh0rTtyLbm2aGq7nF7QKCEVwRwInPC97ZW/jNdMS9ByWrDSxAlIiQagIlNKL/Cb6Id0COv50NCQVTWHz7Rxii57oJTzWeMkl1X5zOWXt4mwjYsc7TsAkl22ZIkr4DMzM6qXLOeqIAp6P75+M1LOH922TQO0laX2eHA4f8GYLVi02Kan9ehYAnzgvofs93//bb776R+QUHWDQr1PVoOqzhCpnKn+IX0RakBhWaj6tSMaELzSLz4GrJ9zRoMD1tAmoVEdspF5i606f9TWbdtqK887x04983T71j980mbWnGGmozjV2pQ1JndbbWK32fSkVWZ0bpRPe89MetxmpgSbtMYUsGk9HtGPl8bkN+pK0+OSRl1p2ok16np0woWbkos/Eldd6NnA/dPMinH+zxpKl9xozEJCChBXbQqoy0t4rhboEk9eaBhUJ+MIUY3HNPr+c3SISrrk09sDSn7siFT+x6yZfW2pVEZy01MT1j84lHCCmSCaceAUxSRcVXzUhQNfOLiILEB4qATv/kKTEhribVBtUpcMKzouUPO6pxxOt0na6XX6Uy4/XqDqhOcw0Svjz8Yjtc/51BsT4pajC4S4xZTHXqqZaNSr6mVDw+J7wts81RK8zDBIIVsKUZx6z0xPKF/6+qQTCgYyLtnKDm6aEiyndA7XxF9V/Fa0YtMO5NfXvH3yqWl81DQGadOZ8XHro+/RUmqD2k8dZ7UXr7KBf7nL+n6wuSAe7LTzVSC0BSoqe2+uLJKOeCpwRgw31EGYj/pqFZ80G8Ma1xrL9T0TmW9xLhx/qWdq0vqH5nt9KZ06z3IdQAkneuesHBmQ0p9+xmn2gksvsU999t/8vnPGDe3Jl/j8xVAPc1OL2suPu2iKEE5Fc02fxmKtNqPpSLQGBn3cLX/tz9mSn3210tWvptTHZjKDJQFRBmOjv6/fJiYnrcbcATuMbdL0hQvmvHDFWA4AqCV6JXBHeDdc5pO9OZ+L9oaQ0/aGNzNTK66eTHxQUWQruTBX8j17OdK8iw1pjA5IvnyaVbKrMK0qTlpFa4XeyE24kNH60NAPH/npop2UZ5q2giouyV+QFG372xnahtQShV4zV+qTKV6GksUx1Y7us0ZkF3gJ4qk5pYmTAIEZOefoKxv9syrrYeE4oqW+ltapAjo7kItknfFxkLgXXuItJfO3zGvONJvaY4J06dolWuXyyvJTvZG3r8GJxeCXeafdlak00zpDm+l7CzXLoHsnp0D6r2gGFmlAFFGFvf83M3kPIxrclLIE4VY/EAvoLEBOEdyTSumFwFNay1jxtBKuz0vgAdNcpXluWtfR1jWHYayV8PXT4HM/cZ3mh1wD93KY2gsPSgHxkCLohMPSe+bPn+98O45wi3cdoS8XegF0nrlnp53y0P0OZ1Y5atkyG5GSzjznupNoziiMkRmDMnPshkcecfzH8wfdppOb+7PULgQ6Ee0Gwzo+qMq6QFUxFHOU9PixU+FFqXH99uX6RWfRokVSerSu6TnA+GTFPvj3f287duywxUuXzlqcKJPFsMoCJgtVnxZE1sQazxDEA0o7yktf/7BND4zYxGCfTezZY4vGxuzS859jn/7g+2xmzTmanFAWk4I+pcmqIUW8qgVWvcvhDaWZlHAU9AaLJnApO369GnAp2f6WsOBJOSdOb1JNKvp5p6HT8bYwHSj/FE+WEMVzWzoqYbLrj4NBV4DOSQXpVANDkrn+1SiTdtR/0HAe9Xizk3tT648PfHASpgIpF8oAGyrHg1JCyFjNfABICjqFJQdYlOkkMwHR51+aaOraNDX57vdFOEkEuu5K5cIGpMqgWUjlCdaFlzDib/DnhAC2EwOB/0Ve8QNOjjcUqasd+1C0BEP2qO7OWYk5f0Pc4ekP8Tr9RIp9ISslJfmCkzMHPxEtGE505vTXedVkju/0EjGuAUx8qycpzRdXMT/zcyfY1G8+3Ybf/iOr/miL98tmOYmhYKsJT6F29sriB4OSy85ZKwNmhVP/SPKEf7ZIUOHtek2a+sekWnw8hTEkHBZWeAzZziLbrQJtiBV2NS0u1eBWfYzo+JUr7TWvfIV944qrbPPWRxOWo0vWxMQHvivNyka/8LDaHPXLH5fS/qrAo5ddZlumbzA7ftT6v7fF+u7erbxK0HhesnixnXTSSXbSCatt4+bNdsWV37Gdu3apcixoQsEIMTzihoPVRy+1855xrpeDHPhRZvzK8QgHXsTBLYcjHrD169d7f6HPtP+odjuMeDd4pLH4EZ6YmLRb777XHt2+QzsazV2a8wcXLPJ5ta65cnpU7bpUCuR8GVVWzrfqilEEYIP3T9vAHdpk7k50KK8ubXv32StsYPWA1cZ3a4MHUD8p4tVNDRtYL4PDTm10tInVzKMErQU1yYq5WRp+w+fmAZeFEh+TYzOMg5dwvlFWx2iwNgmo4n3zyVihb0+pzQcWjGqDoV6yaSfdyAZgCTlCR+lsRMMxIkBK4wIoVAXCsKBgCdVpeaKe3PQtWaRyxqxv+VIbOfU0q46oD+3Sl2537LLJdets6p51Vt2lfght+hpOZYeDL+Y/b2+Fef1iRIpRRYaw7dt3au8pY47YRAZaOTysHD5/QpMaMEISt6lpoEmaJ1JQFaNI6sflcj1JcBxzTsJRhLw4VRpDQ6WudkUGAkGXX1WbNdoYpRwDyoyYHB4bVVq/7dqz2/pVj0G1DTxLRXOaVWhRXtAvGEQkzbqQThxHWZ2uUI0+z/hNGxr6LCyrH2ocsHmviz+f36RbxNhQwHmo6bL6Gc196EEjC8ecp107d6iaMraAMVO3AW3ibbqmvpT4gB9owhpletz/Kl7US+0M65KLz54VnXxgLtC6nzLqaZ/iAvivIQNnReU0KukpYIMy9asDY16TEVSquE07HAPoqE1XB2x6aMCGR+fbeScus+9f/nVbJhh2iYmJHbJ17rIBGVjqk3u0z5ZhU3VAHhg5Zf3ST2umNu+NhsIo+JKZp3mFND9IV9uqOfKP3v4nduZpT7P54pHN/pZHN9u4dLtYxzEcRjiNq9RmHG0ZQ7lXOgaUGj/JHYdCjS67R8Ysl4dDD/yfOR9xSSw/Pgaw9IyNjkoXxYqrq2sksFDOQ1lfqgVo46ZNEqQm5OzALTsG23JZ4welwE1qJkDx/8qXvmQ/uvFmW7p0mU92dCQ6livedCTl0X7H09ySgpKu2veJtnc6lPTBYYU1WclvDM+3beOP2ote/EK785pv2fj8ldbPxCTe6bLTdJzapCx2Gvx0FPGBkkN6Q53IlXBmKR9cipOXaRMfPMH5NWQFbPBFCGYNMQZeDFomPMZL/iOUrHCA6mBGcrN/MAGKog+6tNsXba+fBoIfHRJ9H3Bkxvl0rr8UQlnpV8/yTnBoppDzI0zaZmB4Xl4EyAs3+OHKYWApztSVMFOeZMVVKhO7sHxikl/XpIF4GPA8ValrEmByk2SKsQBuixNJ5Darr7QglvjyOrYTEUVAJbTWMtRumV6gJQriLZePvAck45omBwYzTyjS4NeEm+UKzfaSa5pkq6ovi4S7zEO0ATkiTLdIOK1UWqqaUVq91N7xJCPS6JnkxXrBR3K8/4lv734P7LbqHdus8uAuPQ2ivDShR97wyd8u+6hK4PiEH5FOfq5OUb9ZOKq4ZEgvwkKeGkqKjcauW8slIeqCeJAWi5o6kYdpFx93s2iSIQSaEzMf7aida56wLv/3b9gLnn+J/exrX2133Hm3fe8H19v2nTu9bDBQwFIPbvLHAudFM2eAhA9eBWuSzqqPjojnPVbftNlOXLPaTj/1FDtmxXK757777ZMf+Dt7RHDPKOH7vMLcITL9I6PSUwftx/ets/U332wXP/uZtlyWoE6KeTzFpO0ivV0JL8PbwwObdCuNlw8PzR+KBC5ghWIhWIS9n7XFgdE/193/oN209h7Ns1p8xVvfMYutdoy+vHqsNmILtILP04tbVf12aGO5Z8r6btTTqk0brLpjRn24Ir07zQVRBnPz5M4pG71+yHZv2OBjsq4GneFpqiabGcmuIgUQCdbV960hg40QXJFXe/gmr65ys4u+7t1QMMoJGChRbkZ3L9IbaOFy9HPw6pr3faxRTzWgK+kiXBNwmiK3Dtu8hQttcv0mMSzLnc8p6ivimfag97SWn/pBGm8aH3lA8TS5cBozw8evsnlPP8P6ly6xgSUyag0P2tSD623bd66xmS2P6n2IDTazdbvWKNQ/9SvRiTpAO8JRNvMTRalKLseaDEPDYwtscus2k91d+GorVd0VR+/wuY0yLafHxB9O9Ywx53KmXcL5wEnKvoNynDB0fI0vwbw9fLyJRqaj0ecKOlQ9j/xp7SDGt/TZggWLbUrjd0ZruPZwzndVaeD5+PBZJmTQbHvmeOrvRYObFWDyab+XXKmKDlAG+OMfijMO405degF+Q0olY6YmH+KsLcxl0KQn0dpaJW1i4yYbXThqk7s0d2hDS1+izXgIx8ZoWkL0eubyKIe6UCLli2KRTgXY1KX5UwiUpfZEf6gwp8onjSevVY1DlHEpdBo7KOacQpBCjoFNMJRzYAro68lDptFqU/MmpUOM2bTSd2+ftAf0xO8MfbTt2sv/3U4+5mhNezKE6sn57l07rD4hA4R0LSl6mheZG3ViAWMjPvKRsl5HaUd5RxroY/pX08mG+Qq/74/+0N4v4+38sXlStPtsscbSuu1a0/IchRzaHZeWHLNksY3wZBbZs5RIBlUF6C88weX4y5ZHH/V4e/79jZd6dktWjZVuSS14ByQyLcWOBQFLOQtqKOihnKMgLJDFGgVw05YtjtOp4FEdPRkckaWbjimBPaRJ5R8+/GFbvHiR+ok6hA9rFm4pPFRPjeILi3oiCzWdS/OvTyaDufp1WRFqEni9b9Dmz1tg92tiWnPWGTayYJ59+T9usr4TzlcPn1RH12DRolGXgk5j+S4OP/8amkDFuCY1FYaCrkHFo1as5D72GFGqOx3Ip1Hx45Y5wfyROMn6h8FGXYI/AoApPPh2QIIri2MkWMoHwOGqM0ofRy1gY1o86IE4SCkdEsgix0WcEpxeoioELwaC/t9LrrP5YAB6oY4AIU/b159UayYU6CW65Em0CIgfFiYh9Ks9GloFapInu/yaZNCC67HyH0nNefI/RUJB2yHtfLbGfRIvcnYKtOJ7vXNxlAOHVc4RawGYmfIRrXrSZrxQktI7UfXJkQkX00G7K41Pr0tr9dqw2/lrS85RFtFoM/qazwG0v8pC3ji3yul4QEMTVGX9uNVOXGD9t8mS2cVBsim/bnw0mU88tBKj/L07Vjg4Fh0XBosE40Iy1/ijv0S/oh8x//piIkUrLdgd5NupwGCjya5jQXNv7ptXXm03y5r+rPPOs198/evsURQTGSU2ay578KH19siWzbZrh5R28UVN2IDi8Hmi5/JjQVedFq5eYSctXWOrzj7RTjh3iW3Y8IjdfudddtlXvm7bRSNnlCee4Iuxox//+jR/obz1VRbYdlmWvnTld+3pJ660Z557TpoHmUckv+h3zI3My+0wX7zb8HweFX74KBC4stIddB6LPzk5ZT+4+RZ70KQYPkvW8qctNFs8z6o6sti/q9+G1tWsf63GClqTL8paNIvOxJzKk70kS5/NssJTp2+oH1T6OPo4ojVGTz+RGXA3jChNVVFUcw0iVTugwTOqZRXkBGqfFIxw7X2Vunp5GcHjotPismJImeEYbak/q03oyzSl2s6VdlGkD9cn1ZcRs56OoIjMMFbhWWRYGVxB956PLGAbqt4l9EfGDscn/6CNHH+cjV5wno2c8jTrk+WyprVs4o67bPMXvmKTD6xPio7W3yaHUEIO8ClZlRN890KC0nNdkQs/nmVNT6itZIDEmLNb1veBtNsRLpuwRDH+QtafJOMjAwCsm6KlmoLmxiz8iKdyhI8gwinocZotwxPPJPjs4OMPdPYryI7/ToExqHUTI8WErNWDWjvHZUUXu25ccfZp57wWQT/9SjyJLvjeF/Dz0xLwUIC9X5T5dfw8p9HW0V8FJ8xXhmlNwPQFKNfVD51WxuXJKyT5avGEZL5Am6Ktm7f7GJ2S/jGg9q9LCDxBhw/4cx6lYANXtMmXaMGjS8T5THMF+oGWfi8HzR9dhW7hY8g5VJh/giFLN1ZqQCWJgyg6OpXAPI3RamJClmfpW2oAGbT67J6Hd9hF5662sVNW24P3b7ITtGHcqr45qSc5YtOqu2XQVbnMM5U+BgPlS9fzyghBcm6oU3m9BPcjuHqSjVFpkwwZH/7QP9hbf+8tzumAyl2+bIVtlnGhk+Opx1KdwhiTLgpB5jrfmIh3P4qidDdsaM70i01cTp0oPX7YnC3oj7+oRGFSQp8/b54r4VTclXMp1SjnLgShLZF1HGV+63ZN0t5ZmqUPK+8yCW9cE3mDDiYl4s/e+Wc2oPNAg0Mjyocl0oeHDz4eVeEq2qH1z6SOnc4ypwGK5sQC6cq8OtGQHr1s1mRi8+bbMy54tn317/7aqiddaFUesdJD1cn9bDEWT3iT70dYdJ7cfSnwPgPgqzuk4UU3ZUgxa/DToFDnZb6mU3uPhscEIOB5vRN6/VN90l8lZdfeL7BEh0PB6lO92ARNspkQcpWZLzu37FKeO9IUplw8pkBPyunZg9W6znD26xF64gV6kZhJuRfltKX5zFvKkZNhm00KUaYL/g2McGZ+WsstvEhyuU2buaMMZVKQPFFayKkMK3NHuJS7SGqKJ1KhmML8RdnWNFPg06LkAYu5E5lx9Cpy8A5ESkztyUYjeAwijiuLSJ8WT/rg/ji6BmWGP5e8UT5+6i5MnhoLmmy4PaSifs4mw/u2+mr9FSdadafOSN+px+t6XG3zNCkeNWKNBZpcsejsmLbqFh1J250sC8FDqStGQZHkfvBBpAW3Bas1QrumPpzGEytEVU/C+PHos09j3BdRKoRc9KuyeMF3CKqVZIIHzMdaRMocJlg8Bg2MTnxvenS7ffmbV9o3vnOtHbV8mYwRg3bUimV25pln2EtXrfRxNqW5a+OjW/1IEUVyLC4pLInnY4892vY8/yi797rb7aav/dC+9OCDtlNHDQq9Tm3VdBBQNUSob3DEBhevUJLGixQ5jt+xma6NN+zG2++yhzc+Ys977nNs4UIU+LTYMQcT5hdKdzuMtLSwJzwWycB9PIo5eXFR/oY92+zqPfda7axhyWlMj7cHbeA6Lcx7KE8Wsn7xgQIhhRl+fL7SGQQPO6X0h1EGzbLjaUpN83ufDDADMhBN0V/Ub6AHPuO6IoUcGQssmhqPYi+1i8rWWtPQEYn2ssplRLjcc8p8pLyuEopeqjt5UGbDwQ3rBzONRp/PCVg+4bs6Ombj9V2+VqrTiGuNP9YvZaYc5nC3qhNnDOtoTJ+UtX49VZ539mk2/9SnqS9MWH33Hpve/Iht+8qNNn7jLWKAtUr1Fo1+5Kq11GXr0PIfZN2cAUMWlE3YjTdoUxpvrOdTkzOuYI7oqTnHlThrzHzJLBf9HeqMI/J7Hby4JEEfv1474csvj7c4mhFzvWfTH+g4rUwTOGudG7/EF0/fHZbx0jsh1JsnEcJV3fu11tRk2RsbWySjrdpABZPe31wgnAZ/GAciJdnnOcZTEiyQ6IrpWAzjh7q0OmCuM8Cf6w1qEo0N77Pqp4TZCNd01Mrr1o91Xf1Huo9SKNw3GyisbEQHBufZ6FhNlvQ9eu980HnH6sW7eOGiX0IP5wYZ+Wl8KZAahSTxJJlqznHZMvdIp3JjIXVW/TFq+okFFGbSNabgBb/OGGPsyJ/2dUVPbmRxn1A+lPTRBTpKJWWfJ+U/umujXXzpT9pXP/pp27Zjj4ywMtaqPtM62jKksd/geLBvXtXfnDN4k/CQhWTUJ/lNTuxxWQ/oFARKOiObdvzy5V+1Sy+60C644JmyxNO2etKg9J3SMcuOOi6ShZ2THHycyJtGZYRuSjptjvV8h44WhhzLNB5LOOrTnpcZpx3WMe4LdseU/QPuVqWWSAAo5pSMYuDKgSodjsG9XEo4u7AdPCb2Hky/6LfFCxYIrWKjekFqQukf+oeP2H165LtYO64943tsyI9eqMPSSRgKDE4mDbZ26iR0FATsk4QYqKlRK9rZoUzN08tkExqY6/Wy3qUvfIGtu07nOxeeJEu5Hp3I4tKnc1Az4+JH6VUpVcCqWGL0U2/QnKmJXFZ2V+T9DDoviuoRrfKj2PMoxjsT9NSpeHSlQNHBhOgLrUaLeOenmoLH4uHhBGt2TzACDwRNkpIJ9UN2A7I6zXCtG0oX7Zzl6HOUOr6vEU5YMlIJMVj9OACkvW8Inkth0Ye2W65Ix0ViirXGScMlFj2tqAEB0cfziVeBdMZXixGPlSS3mqyPLBqqijefW7TaaUJfVBJdjxR/ZsOai2IgzcaJlJKf5UY/ot28Qs67mHECwBRmwhLujDahTIh0P0+hDfVjomp3VIdHlq6c00/aXZlBb49UZIihjB7jpAzrGM40Xe7im3yMR6xp2jl7VZxfdZTK/dokr5DF8fwlZqfriMF5S60yLpzd+o3pKcewxvFmtdNV661687aOxQWQDc7eXOdWLOWgHVRxnzYVTIuZRjJjj00oHSU7lw8WI216Kow3ALkdA6fdL4u6PY343vlvbZFJnU28//4HnMydOvJy9TXfk/Knvi0eFkrRGtU8VtVG14/hiP+0IRINtfH6k/ROzVErre9L66x6Cy/ltnKWqtKE8U5Nv6zm/fMWeR9Lj3iVTn9hvMK55rdNW3faF772TTvnjFPtLL3Y6vOE+KH9Y94A1u1HZQKPPJEvwhEHL8L47fEyPuEpbcRvu2ud3S0Lbr+MLNrTaK5HOdV8qEXdn4Zosqpq3uUIkCtnLm7/k+qpQuDbrbCqd/MsaSrfjxzq+EtNNBvTmhOn9vDE3acvFt8054oGJJ3suDwFPDt/NIaFl6hRo6ZzvY16lsanp+a6Byb0Uv5mPyXNW4i5wx1YSmcN8LoClKx3qA2l9MxM6dG84H3MQ9RTP1YIHGeE+5cvsaGnyTq+YoX1H7XCBo8+SmfJd9uU5Dt17702ceuPbXr9Bk06SSn3jPkPtBqSM36sBeV0SkklyXc5RUy8K8hxUXgikcsX+jX+atunbUhPtudp51zTuV+1kFDFs/BpI+gUSrOAHBGJ8imCEoj7ksjbvtmxRiVaAUl4/oS8wFHA6SVAfRKlMdFPeKIuwpTDS9v0bXQM+OGJ7YTmjQHN41May/Q7f6DiJMmRXOJVxdCHcKKjPyom2pM6+OoqRTnNtX7UEbxS/0BBpvwYG15hbZw4Duxw5raaNlfC874NLjDF2fIhRyTb0NOW3VO7df5/VJsLGRpVRbZyFY7Sat8VLsZl4ldQ6QNu74ZHl0jGhE/64Yx+oZi7Ek49VUeHaQ3QxoYnmXX0Os01PImo17RJnJHBqg89iKdQ8C5jrDYYg8KZlD4xuXOrjHELZIhr2I5Hd9rDG8bs3AueY9dfc42dvOQY69+uJxl64uUPrxp630RVTpWi7VQzze9sUpAFRhr0v6lJPfEVPcIo6VwmwMmKP/3TP7OPffyfbekC3o0YtCW6YGRcH4bj5VQcbblQ8/IKHQfkiAvxcMiLFu1TOcDRWXdIuW+2cmA+Nr98/LVMAT11bq7E7NwydMaakBIwJYGMyhLunY3KqnOXhUGH5AA+lnLOl+70s2A1G1uwUEIfsUk9hmcA3bn2Lvv85z5vCyVoJq9hHepnIA3qnNO0Bl4cd8HnzdtBvfyJku6CdvaklKAMqrOMaFc3KKvJRjXYmrOfbkuPWWaXfe5z1ncCOy4pLsqEtZ4BI2bVR7ynpMmRPqxyfXApzeuiWds7ujqqK+M84mHTgE6OrwHh214GGQOCyV99Dhq85Oad0MtIGxkg3hkIyPkEmYIpDow0TYRiUwudztNLhjVtWjgHxoTht8Jk/rws59CZTzSEwwjwXbTzpLRw4qWuGapPC2jmOKeAQ8ElXI+THLDMtOLsk5h8woKCZdwnF6FwLEil24DO3nJmHjn1SallALITr2qgtbugnCqfUosNhgukmcNf9CJaZIq0AMymnzDUlkLx83VuuYJPyRN0wZnSnAKPoKVdcESrKtn7pO41EppbqbwFo9DkSxbIkzPDsVC1IjRjqccl9nPRhYSbWN1DXjsRSX2MhV28sxhJ7v0aOzUtRnUeH3obqY+qbaqfvMca5y23+otWybKmyfVzd1r1+i3qx5puZUVvLNMm8LfOsdozj7f+D9yQ0rqw4OcWu6SVwdEaZRhh3vdIg4CY+BfffvOSZF3XZreivs+QIT+/ekNKu6w73k5oXuTv6FwyKVN7ek4CjAIUrkmpicC0sDfHfIdddLss6Js36eVPLaJ+npSNKIvxK4+32mvOtMZxmve+drM1HpiQAaE0RXcqQAtUdcEyqyxakR6/SgDe1zRP+Y1RnFfVmfSKDAcVbQRqWhR/eM9D9sDmrfYTHHVQu4dC7vOXeGT+DVgnnzqCC56fkVU48u6vv1VPBn54xz22UwdlK4v0/pAsfjUsclLMOXbIAqyJXP20qpcj0ajVBpID5ZTXDKzd9Gec9wPJIayswHwOrspat3C5Hq3rPSjOzeb2Yr5lzPoTTJBxOm+ukSCY+lWeF6eFX6aZ8KJUj+31z4AI1jXxJb5TvjQPqleIdtTJYerb9FsskrzYNjEwakMLZdGVVZo1jGMYbtXDyjJvRMdWLrKFF56j+Vl3No/Osz3r7rNd199kM9+9wWpaP2s6bjWgc70qRF9ewchFsKnwOsDHVxJKyLZc31pfE5/+X+B45vij9qIMtVFd50fHxefAfJWnuXF6+y5OrXAIKc//ad6ETqwBGJKcbmmsuXFJ5FFFE3epHdqVGn8qrPy4kCUThtMXjKM+Pn8IJeoFdjKeCE9ypV7+AqXGHccrRvW0ac+DG9UdkiKoZOGpH2aXZEAuaGbexSU6R0pr8sJ85XNQbBKQUzhkr7hv2AXD4s/FAYwxYMxv9caQG9t4J8CzenulPKwdfixK/R6Zz1usl30HxnS+e7ueovOEUXh+NCTx48WW3qnwOHOknB9fkax8rc4wtkO8L0ef4wkra5sfGcOXsRTl3K3nHAdjzKLjSAYNPdX0Maz0akUvCqt/6j4PhbWBEw5PtRjnevynPtFvd2zZYZeecbKNPnyfbkd51I7tl5KtfrdLqtuQnv64Uk7fR5S8wStBsGGp6+UGuEdJ5wY/jIlTMtr0YdXXaYVRGUV2bt9iH/rgP9jv/tfftT5Z5TkmvWTZctusdy04acD7kVjOuZ2FtmPuwxGO/kSLYczixXy/zCT3N0d8Av5IfHNzqenmhrtXLAlz29attggLkgTgi0Hu2AghlHZoIDQs5ijwTEiLFy/xoy28rLFn17S9613vsmFNTv0SqJ/dUqshUhYNLJLEfDesduQqRdnRUgdTx6BsOs9gv3ZnTGrVYdul/H169HH+s55l3/zIh6xywjPcOlfhBQUdYcF6rpHiVnG9OqJdaYLLrKEOISVeabwgigWLjqSIGpZSxQA9SiEPR5zJlZVF9c5TVULzfiGJk6XkhCanP3SKFPGw51bcwXRTGksDa0obC1FXXaXkKh05QiItPCChWvI3TSwotppanKYTU1oipjyaIDgCQRsJqZ014UEpXAo32UylSCj6T2akkGrMLOA0NUM7hLaWRa0mBR2LDDthnwxEGuvOLAc/OKrjPHiAiGBRrmgoKAllePKaf0t5CmDKQ9QnWlD8TB004VS8UEHPCi59SydVZeVjwQfMxiI50hQPXjPU6fDYTv2wkc5mFCmpLq1RnygESkXm2nibZbymwEsZUzBJSTKmv7lL+V1C+dFqjZeemRDEJ5MzE191q/r1tx6yPv3UADlv9rZI6dNv4C3fsen/e6HVXneSXtQT7CGdL2TxaHfeHu3A2XFKaS8KLF+Pchu6KFlQhYwFxBd2pXEO0R0KmtLV6VOcv3mxmSXbTLOJ2Boqal3IjnESrkM9Iwm/iZiUEmQr3nz+8TlDSsew+P6Ti61+6nzre+f1ZltkcdJLuZUJjRLYjyKQn9PTH3Woquat/kXLpaAvSiWKbu7omoME0ltpzHENWa/8nRuuGpzRTwcbN+0et3/9xrftwrNOszWrjnN+4Cl+9Gd++1LWSQ/c/fV/fO8Dtnb9I7K+SSHXYlnVDVoeRjHPyrnPSeKL+lbC5K2qJYNDEow3eTRzHvM+jyWpeLujYLDBm9ylo1rq4+gmiBLLHWsECoM7OhRkdVWK14cVxYtB0SOgXy7Lm0J5XdZK4WhlOPKGi3Q3zLAmeEJSHBOO+pPwGd80GyzQDjAI7sCIjilpEzc1vcefLqII9euFzuroAlvwvAtt+Gxt6rRhntZ56W3fuNImbvyR1WU193K8Pokv1ShVumAzhJa4YOoPB/tsdKQeOijNgQnB5ZJ5QyRejrCSck0fTOsMVaCdJqTMMFfq0IVkBA3VU22B1dPnNNhQOnQKsUFGZXi5CktaCEUY2XEURBkcLlDCC6YE8LHOupb4Jxd1ifc0CqZJkPMRHfsPytGGdnqG8+d6atM3KaPgTtNbECCKEPzrhi50DGdY8yT9k/nXnd5B0jgLB23f/OU5ESXX8ynu9YdGrrjLloyKs9HmKItb0eWjOIOPoYA5xHnRH3/HQH56R0Y9X4YUjm5w1prbjrTC+PrDjM9Rm7r6Cs7bV+u6h7UGiLiC8pEdQRoEXPXrCoPMFQdVn7LhjzFEveGTLEJhziV7ekKhDNoYgNPQRndITwCm0ItcbtM6saZNsvrAzK4tNjQqI6sMpFO7Zuy6dQ/bc174E/alD/6THb1I1w7LmLtHOl3/uAx2MrJinGWzJlOs3q1DT+BIpuiqfNZYf/9Pg9yNXuhi1El14Hj0Fy+/3J57ycV2wfnP0EfjdNZcNwFWGJOSwwIp6CjfOOTMLzaMiAL9if5LG/FyKD5iOhAulTqbkl7ynWMRc8WbXcYsyE49MtolSzUW8mKCFxaTVDy2iUx05hEJlgP7e6ZmbGRkUEr6tH3kozra8uCDtkyH/ScmptxirCZRW0gZpdNokmBSTp2DBpJg1XG5SpG91sygBhtWTu0Kh+rDNiPL5/27d9rFL3qR7bj1FtsxeLTaVPkkHj/jqpf+0oShTkAx+tPgnJV3OHU0Og0I9BL6hItVOPRcV9jpyGTUoCZO4zJglZ9pEHS/3Yb8OAaBnJPxkP4kUBEQCa8fybCKgwY7SM4B1nVdZUU7UwaUy4FOnJ13rZwJJaAaxy/UzsmSSwdNyD6ZKFyR9bwAKqmFtyBMGzARepw2SGFwWVh469oXVJXNIglv6vaSRRr/fdqNp02aFEPBm1eSZbk43c5/fMAE05SHjKkPgnKXOC6h0AyFa4fPqp9mIF9IVTuvD/ITAS9Hs1JVT278cRltjARoe2+XWOg8UpRHoMFj32FZELAiuHPKKUh7J3GmuMpIqSWmizwJpftf5SmanzYR4VxhNgh1bb4oLC2TlFJ2qg3o9F93iYsy1sB777Dpt11oM391gg380pdKmUtYhYJbSu4SLOUqMBjP7pCLqsP91SipuAbXXQV7xHlJV8NAL5UQ0w+X+CYU7d5s82Zas2cngpG7kS1Q5O/qgnGfC9qwKDQv0swdHHFhQ29LZCV9/vk29LMftcZmHdcRWkXWJlPVnL9Mi1arKE/f2BKrjmlB09lKXnoM532OzMwdWvjST/RlRecbDFjQG1I8Gnrs2+AxsI6/fXvtvXb3hs2uqJet6aGo49O/+XVS1oHxw5XxCOOK+b0U363zyD+8Z709qieh1cVH60mf3mnhBi2u4pOy7vfBaxFnIWdiY4POOlDHgpcbDOoh6niB3Ass/Wm2bQZql1KXUtuvNaS2RRsD+oXm4oKmrxlBVXUO5c7huS1K9CPYzBEQelya04FE+gwykKyKNI2Hvlpaml1x1DhkkFLfYqiWtObB88624ZV6/K6XZkdXH6dm1lVyOmc88chG23PDWpvUkwhuuqj06x2DRclKLiGKmTwwNP9HXZucRgjrdPT31J6kMDcXjltuojICBq1iTyymU7vQZlpvldWPHmidHdax1tpOXfyA4UXWVG5z8SNqGsOU5opeXvOiPIpyuOh4UyhfOOL0CXdtDR18uSIsIkVc4zdg5PP77+X7tKS51Tf6Pg8qTfm87tI9hnhTb6euXNRTl/QkVDoDuoPGMoo6Sq/fJKW1DccT6CjTAfCvNu3PxoK0FicZRxhaGMEYN9TNx5s28D5+RBelusZ7cDiNZVfWJezwAcf5dZR39gf9OsM9b/FK271jmxso+1BElcZ5evijjvQ4VBhckT9FE05i0/UnKUxeN9VG7awVRPVs+BEXjUsZQB1V8qsgJ5WBcaQi5bmmfk06Z2z6hjSmdWUom21WMyzcGvjqK8M2MKbvVYipnRPTtmHzTjvvuRfY7dd919YcfbSNjtd0I9BCGWZlJOUJm+o+XdudjrGMawOovsHL0a5Dwr/qVGyovT4NvfvIuxAT9hd/8Rf28U98XCcuxKPKX7H8KNujza0E4P2XPoxDRvQXfBT1mBO5wGSH9FcBEuIB+BvzZTsp9k0H3dHpNugqxVHtWOZz32qe5MsWRoTknVRCQzlnZzNvpM8fK9y+9k676sorbfWqNTp3PmFji/SoWA3CCxIcdYlJBEWTAYBgK0wEig/yaFMdixcWOLKweGSRBuKQbRado04/2VYcu0LHZi6z/pMvsIru3+QFrjrnysd3SLlMZ8orWuD8ih8WOy16Fc6Wa+LBys7Ou8FjZZ1X1zZaHUWMaZfnC4FGAkp5GuQ+CoVHpxKO6kmXVcBheMTanfqJHNKJ1BxW3QihGmo/qaMtWniYPECXSxMGGCWXF/50I0Ae/Ep2XDpn/vkZaSYd1T9cokcs+FDI5R0YTd8nHdGqYy1W/TEWM3kzGBnV8Ohzs3ojA5YbcnxwaaZKbanJIPPapJpCDHKcDy0Fg5vEX6QlXHACP0Gaf5v1ybRIEp8F3EkxsSQa1NUnJOGwyeApjr+Qp2w8AmXR0n+fBAklCwpEy04caYbkhopOrii7SExtkigXQA/Qz5uOknGp/qnPKIrQmdngDI8EJmstNri6NrAOEphaMiklPFQKVPpEL+imaJqsbaf8L95n9Ut1bnCJ3n7fi+vWBuUss+uuVKoooTsX4ptH3H164Y8xVp+vSTvYo3rq+426nr65bHMm6uwuECOeoQWBVnjUt0sX9D7iE6z6hMurlD36PiCSScfj6tCqePcPDC3SQqfH6NXnnGiV729iKihwyeeORYnrE7VJ9sfJvnBo7qhrY1JyaXMrAIUw0GhvFlJ0myHNC0u0KdDrBBznbOh6wsp9utt687itfWCjnXvqSTJ4LPH6+JwpecSiRHu0h4GVFXDq6nJQUQFX0GGR9qCugrtvy06d/1yofYmYYkHH17j3Jx5eL82HtLUUQuTlhg81oc+Pimege8TKLsovw+g03p+06enXXFyZGbJx08YYhdUVdO/tWoeS70NEefgnBJXjzCic5sjov0VZNFib6wBSfhTXjMuEJ3LePLlj1Tib2N6FJI/hU0+1wZNPsiFeMtbxlYl77rPpm26xGX0gpaJfn5SFMWUcg/SsgsWt6pXGvuRZcgX/ud/HmHMLqeMhDzpScq5wQz/jBzzKTMo8TKD24clqTtm7GzbPdtmwNmaT4pVji96WmTRzCw5ZwBNgIKnNEIhgKjNhqVvk8iNO3hYneTp+yEL4ZHHWNQi9OZUBHNrYy1QYAx8f/iJOkzgnqsOQjkc09PKhLIRan/SEV5tqNpNsPugZ0OYP4Rxx2oV8M5zbd3CJ71bu3SIuEOMmIWnO9afx4jD0I459wpv6jm/yJFvaKsphfFK+H8XV/DfFxoiTCrKm+/3dKPaaK/3WK+jQ39EAFfYn5BjQqAtOAdIV0E/9Vmmc0GEzAgzdqi7lm3AcQ0Mh14Srn2ToGzQ22cor5ZkPQE4ojdvZeR+GqxenBQO/IZ1syrbp5WWtG9qsV7VJv0+FXaIXm++453bbpiNax0qB3y4+uZUOCXJDHfXg+UBDcyPXMMKH86yOhB4odF9f6W2quH51vbB/jO3evd3++Z/+yf7rm/+Lt+eQ1j02J+N6edrl6yVQCtVLfQn9k03YbhnUHt6oI0/RTuAcAJd6xmxC/XM9F3qgXhINFvaoog+tX29rjj/ed6NMHdHR3KcD6UenG1ZH4zrFKe0gJ8an7WMS7mLd9MLTl4Uji92CDl1ucaA+yVKtzsbCpAHGcRcUv5rO+XJFEW8268qXNMj6dG5dXw5FE7z4eZfYtz76j2Ynna9NXhrIlM+RCyYV/9qfOlxVb6PHi6cNdoJ6GYLm9D6gzsxREBWmsqWYa0HgrJbpBhlXTP3roamz0NVTXRVQgxeDg8lbLiYij+Q/BY7ihOmEkRFrc7/O+qEgYh1jymDSYyKiLF9s8OXidpsckayEgbJW4KZ8FFBY5UuFC9OzOq08H3sYnDzHMGPFHeek8VGofi1CTM5MjLygCx23YFCPeeIdxWtcj0LJIJ5qPmuz8XCA/xXV7Gcei1gpXuLVgy6nNNE7epYx9cXhR/8LWMAdQX/iKQM5HF8+VUW6/fqaJbKqaRGCb+oEDmdO6RuJZhqGQZ/Nn99ew9Mc6KiPNV1WKjLA8+SFJ3CCDvFyuD2eW9+Z9XbGvOD1Z/LU2NAxsYYmf64PLV708raD38S/t6XqqV5elFW0AjJUfWdeeroaWQaSE2a/GQ9PEkziITLKb+c74QFPsmrG6Qt6rOzKjDIyLsXLAO+dsHBJ0aI3wS2OjbOI+GQfxUUacVjG+fjJ/ak7L0Eh5Ym/rfit/AYOfQo8fiyquTuoX2gzOqLbrPgIzjkLde78TOs7SbjbdEZaDv7IURnUsZf5izRn8f6M+klnVqK4wqdejYW6OeFZukpvib5qK+WcOUZvkFn10XGrPrTTz23WnyveHpHSdNs22y7L1bzJmq2WkYJbsYJvfObBsh9hjiHiYsGivjGOymG+VbHu4U1W0Yusp5ymM/Y8MdLizKLqP83V/pRTfMcxCCfsckMe4jM3YFIc6JnRoo7pf7w9NQ8GbqQ4L5qTK/N1nFGWuj06ZtknBci/mIsxBYVCCocbK5CT+pq2fVneErrmcO9xXkCiWgpGMYXfKQ16oiiHUsVokAFFjxFpUuL+Eqp4d/lpDh857xm6p/xk69cHaOp7xm1cV202br7Tdt1/n5RFbcxkfa8s053RSyHAKMcgo17DpgKQwi4HNFIpW3yEqSyxaCdHDjM4+dqZJxNMilikhU+pTafSJTuvi+Tpc7kUKRTaER1P5XaYPbpfnbmR4yFwiIu+43NTZtA92hwE+S441tMoj/VZBeWqwjSYEip5tIZk2kCBMJ009KKjOpejOf+qsyvi0Cmyo6YLT86XbfE/T7oGR2xrm7bqST1PSdFWREr6hh8fzU9hwqKPqo+L/km9YK+u9c+V4iwyP+tO3cDN/KP0EwaPaxFZezm+hKW+VksKZI13B2hiFGjBvarkR4OWvjODpV1lsn3gycWI3t3buW2LjWINUj5hOT3ooiswtjAUJB0Afqg/P2qgf4DUnnxpOslfvgQKHXQrv6kFfLdio3ORDlxhzRtJCdd7gJqrhzQGua60riflk8rLbUNoBDU93eJ9oYERWdEF5z3Dmx/cbBc8/yK79lOX2Wm6q193vsj+qbnLZaEjMqpMTfMVN6Cx8W3w9V/JgX0016JyWgK+WTNQ2PvE04B0tzFdL3rdNdfapRdfbOc/81y/KnEehmK1qz8BZ/zn9qDqKOe8FMqVuQ8+9JCs7frIkeAH0pXfbyrTTbNrGdItnDtSt+THAt+ybZtPxsfqEQYCYhPgF8/L906qMjmrzpWLnKdGUJ/513+1DQ9vsEE96mUXhdBYrH2AuU+jSHz+U5IaxRcXdnIC88LkjBqtqvNP1QHd2qIz6Bt1NdqlL3uxbZFV4tGqHiGqkzdkPe+TZbyBoqvdcwUruFtftFPjZhas6MD+/97O70fP46rjs+/77g/vGseJk9hOEzdN7TQISuGikfhxhUDKBTfcoN5XQvwl/AdcVYUgIUErIVrSonBBKi6qXnBDSUMhNCQkJLHjdeys19717vvu8vl8Z+Z5n3WNZCSSsd995pk5c+bMzJkzZ84zP/RrRUcIoRXnmVMj7ERJA+M7E1Z7t0MJ5zNlVIy0cBlCmqM4UQ9U6AOXHwnTnB3EziWcQi7H5GF1mru0hThxKyTrrFI4U1Tn2rxg4k9gxGtAFKPEGEH/ryeMLCxjT8yzLoOpAX3zZqenM7fpT6Thu1uKbnr+oXFBE8JUoYTgnLImzM2h3uwW6zqJtaADRYdbYrLMg+t+60/X3h8IY/mNb6CCD3VsuGiN6zgFGPm9DoIEFQQ2a8BKKXjA01uwzkGHO95TPlEqOJKlyP35qE9PqslkjqO8aniQ4j1ZFuOkM803oid4elnG4Sbo78mq5QtsrEcgCi4JY6ONF7EtGu3JO21SqQ1FgMWKafoR7p61Qbpj1u1Ofvg+H5Lg8ZE70RaE5721l/4hvpGZpJ3+jidwygXpkqfroJsTXBxcFKr2pTjaiH6mUPYrlnQ6XNFQaYEx6s6htlc+2dp+IwDlUJ3UiGNMYCtHzZC/Pe8hYOmRZnDahp7v73Fn9Exo5u95eOcFLON/9+My/SeujEY2Kc9WOZXF5wT5FHK4uGhF/aQ7wNjVTp1TF8grDjsuR0+A9zJykSUz0qwCMLlxp6z9GMXiZyh0rO+03aMEkLdfGRYYreZPMWB+hZs439sr1z66xclZu+XKc8+UM9yil/JLe2sv+6plUaZ2xaqT1GF819/fd1gP/bN3r9IClEfFDCZE/xUKeqgDFQsDIr8JBv+4DYTUya4nXKMp+RjXupEwWToXxcjWlx5+yJsj1sH6JfCYz+LyaRaTUA/ZQOhYgVaWo9yizFJHlWNAaE9Qji/5o5cvYeJPTvVPjxsF0eYNQtyRccZS1pbW5UsTJhBrX3i2rP/i81jLt8qc5Ue3/+GH5d6/vwkJKO1bm2WF9pkjj51MS5/taXk1YConzTs0EZ+v0vkMSXsxNozpkuer689WT61ejQvfDu/Q3UCXKQBqgXBd6NFaK3/UHkHDUL97HKl36izMxj4ul2pkCUTL32aD1FqBHT84wwOWsfnHtA90JSFp7f/6896RDaTV8Ma79mNUuwZLUvGHBhRVeNH15LqMq9B4Z9eTRjBiYP0/YDWFedh3NAB6VGes38JDe+Vbsfk+4hXLqsLa8jK+fu2qsHn3SyA0iken0cF3+7GbH1XSjaz9rvUv6A1O0wCncyIojcqYnduflE1WIEwweh1i3NSI2degmy400FbDxEA6U4egsx6AsXYs15z+pK4QfQEl29wWlD8WdHE4Dtq/kW8qnDnW0TI7nhi+jzLOJHhOPysLLOEo9Jmc8274EWv+50f0T63oTN63P7pXLpy5WC5zmdYbr79ZvnDpifLxNmVwzwr6yyH7EKcs8ZNCN5i6L1Aa3IeUdeXSmsqUUqbXDHSeZmNZ7C9/9vLL5crzf1zOcbnTIZMVj/++QxsLbb146k5OGKQMWs7f54IzdVYQAPHZOFdXPZR7WLiHQjYC8hIPZ2/edOci/VSIgyoVtMnGIRnTCvV2xh9xYdDfv/oqi/23sKazkTCVTyM4Y3V22iV4GonBgHRLyw9MgTvGaruCxdzbr9xVfJWKf+zyc+XiU58rf/nN75XplRdRWLDgRomhs6hEmY7mz1cE8qwKbw2tnUK/DQ+j0S0ifGIZscNRczIrfUYcmVHWF9LYuaVfluAXrUkx17wPqPQqACq4gP3dTRy53ZNOfOyO5jAncDpoDpwmfHNLBvmTaCJ5WgYc/l6NtoGdKGtCjesRDY4sqkt6MVgHwrVwHp2+hBAnTqNtG0GlRyvz1LPV6MTHXnumwmF98VTBTbWMEbf8Uvf4h+wq4mAV7+DMlxfpC4GjqEowkR3nOE4EPVx/2rbyUd18pCAEK8soqvULBR3hlPWk1hXlSkHEqfByENH5TpSxwltHta6tk0YAj8EvnHTwG4d1UKKFqI/+N+lrAwU/FWo/calXJm7mzy/LW5i0esJAjm4jVroqOvgTTz16TXjSS4O0jFzeEd6Ly0+VyV/9F/LZL0pLt4QPZjAu04/xnWSvJYyYAucAAZDVmgEAwTnN1wcmdU6ApbVlm/PScylN71/BkthOT3+2JGYyeMeeDid2/baVz4T3DB+cdEDjgIPg4qhAl8WxGXeTZXucWrJykfrmK+CM2yqnj52nr/ElBmu5p0AMDuv3EUp3eYQwlvlluQrPo9PwGnIvyq5fppjorXGs3cq/IL+uVxkqedQYf1G2N5ULVp4yTGWNL248195HLnEf0OKLnG5yac4Z2XfLTxbb5ZlP9svnH31iKKvl7fJU2vq7/u7Sv2UsnIaVD7E6XudM4xnrP7Nenn6QAT0TEfz2C/tQEya9OgnoKFPfeRkEjn2Hfyr3JAgfA+7T8LFLv2q4VviKma94rGWdsSGV8/NYDkjZGWMY4ume0CMT2hcmKpFYpElbLzIiXNPcGH0rp5TWci9zTr4tvifqE8AMBrSB6abwxBoGqinHI66e50sJ1lon7ve2Py57b7xV9v7tP7hRkXJy1NwB/L++6qY5aLrLCT+SJH3KFfJyyZdjlP/GfUxZqux2D0VIMmODmkJXLbwWjLoIqlEhyTNlITbJhjI19Zs2EU++BNIfdbltEbkW8QfrSY2n5BwxAeHuVzbqViWoNUvKYLpKT8079UneupqvPmVroy3tYqtVGMPDQw1pDBEmERwQ60lDWeQ2NIc2wm3uvmzRNeJeNDiDdl3qFxq0nk9Z5jJjP8vuLU5F4Xp6nXnOwWufiJJu3uaT/haImr3h0mF5rPMG57Gwab/Qbpy8qFpdcWd/ijDGa7XH72Qn/ZcwFXWXL6lOQAByF/6Fd21Pl0t5LvgcXjpG1myePlv2PviwKsq5T6CODXW5jLTe55T1BKW+pRuac6mXHc76U9chTycxU08vs0y0f5avYKXOEhP1Hvq5Y2MmMzDXEcr1wjGPMcKz/R2TfHfiXu8eOywbW79AHOTEaG4AAA6LSURBVMtXKMN/Xt0tv8GhHX/9zlvlFCdfPXKGvYg71JFtieyIgYs17E76Mu7YRTMBpg0jHDIVi1f4w6ZPbrJc8NrVa+Xb3/pW+aM//Hrqb4ZVf5OvyXssd7ZNNQhbRjeEXt/ezr081smn4f43vGoHn0Z+/yecN3d2iscvai13vbnH3Lgx1LMoD1g35cUeHrX45y+/XDaYye5jNffCI1l5xlIVj4eb07FscFolTG+5sjNf5nJQ4F3rFWBpBA/zvyO/k+a3fvd3yqt/8adl8cyvsLMXyzg/15UvsKLHr8Ul1nQGPv0MsFrOV5xIcAZ6LijCr/U/lnas5+lcWtCPSANP142hZGhHpVPZMSTNy14UqNXZ06qLkL2vbcJvPcx+onAEh0xk5zwmrzkbaHXVek6nssP6Trrk44shptNrfYUQw4yMRE1MvgDQUY4pW5zRuDzEJ7m+NJrEZz0PxcE7fnewq5hiS4sYyyQL2lV+5ywP0RIa67m42k546VZYdmFcCQAAZ7mqa3UYSxchPbh7iE5NdPgGHvpE0MOBWuIch+unwOJ1sOMfDcnPpNCn4qXCYHg1U6eNtdUIL6RnYAdeKAStt0dW+NpGtq9UxvkYaDKEjAkb0zYUMdEn3gIvjSkfeIyVirSZE428E24AfDuhbBN5knDzyLxSGMJS1uCoA8pQZ2CsfiA+jwV2m6MDWT5R+YnEzdnuYzd+1Z9fKKxQ8rQCcuyEkWaHDZUom3kF67GsO2XiyYKRgJtWQCfGU+436PSJDerzvqTfvE1Q3f10Gpp6aiA+TsKfpLFiqX87XD2NhIEIQhd+YfP7PgP8CsrfCucVb9zg9JK3kDe/9GSZPIZy/d/seXkEBeBxRDMKuaevWEitoyt7tM9NBmgHqJvA0tVXOI9+ZRec3JjXixI2ozr6e6erfwUhBt6kLmxZlNIo6wjDlbcZzNywepl9Of/8Sbl593bZu7lfnn/2aTZUufxsWX/6bSOXwuiUQdWyV3O7wxKMd6/dyKdqZTmNRBnYHYMsDg8juwaFKoxvTYvHnrJskygBaQXaz8YeOxWWUZBWsTgroBXe9DofExTsA8o95WvEKSrvcLGXPpl+IeNo2ROh9NA+1ER4Ru5yD4wKe/pCMIKz0SXuMZ2Jbvnq7zRkjbkBKDDrFx4vpzg9Z/Xc4yxhqV9L9t/haMTXf1oObn1cFlxk5TjhZsp6P0Qoy62iUsnBi7VQkpp/eCw+dSBXhiaexmkNrHt4lE8j12lMOoHx9IQNrFepr0v5lAI3COpVGs0e4S5+f1HmfPISizRjyMEtlC8MMffm8DvwAzGdKMKqxdOETjhIK5yv+UtAo7kFp8jyYoIbnipNk6AmNJ7XiXug+KdfUGlLsyeA/hll13xVuK1jWhiDxpxK2INnNplMlTmXPKFJVqW8ylfpDA3mEblVCbHde5+JP+O+mbf4VqoO57NPmqpfbRMcpPPLu88+GfNpSYRLJRjHOaB+vbA4eca6vyh3buxxzT3GT3jee1GkqTv9nnoX+sElr3R6rCXfdfXLF+l4zVIeJ9jisa7QjTT8zJFBC8Inrul2UarjOv3d/TYKMG80jR7FkhTLM8Uokc3y6i7oGRvoYvf4knvImf8zFOhVjKj72/PyBkaYr7702+Wtb/8tt6RucbYHRzWy5nyVCd8RN6cq+3NaFadWOTDEKq9sYByOUYmWlOHUE9dRwl2W5zKgNXjxB6+9Vn79xRfLr/3ql2lXlmKxDCd1AawHmXgPzy3008/iSMXeJuPnQ1vQx4k+Db8V4M/zJc+gqJ9jzZHOC4dU2L//yivZgbu2ynpKepUztX0+83nJhYK+rmlbUtZ50Mr2p7PzrLPJQGVvDSa5fet2+c2XXirX3327XJtpVWFAR9FSUTkG79G9fY4C0goOE8BQOVfYGaxSi6fvgXVduR3IdFkfZsdSeWftQMLgap9ydzoZafNuFwOX4bzL8JXSkDv6QzxOBTXxgvNPK2HtQDB0rKCqv9KgYHDgRViLE3jTiaXiX/pyfFLqx7D+A0oGJ7zqSdLra00NYOLy1NuwJlj/GGz0npl+LLjmQz3ab0wUywslok7txApGa8W8M7kh8whBpSmuoxdL/HpaaCfxBE1DuqhoAlfwFMrhzPeaIjh7BjW4RjcY4VIvCbW2rSOEE1V/cgJhvfMjrpJHOgVtc1pKqtDrIfV5gu6hpJJLekk1/4anw4bHR7BiqvD+5V+vlNADDfBGhDvCTL45rI0LPZQgFWA2lIu2kPjwmW1Bqo6748zzNJM4zkpf/ZC+476CyjSB9U9/j3Uy7xWPcUnP64Cv59FpBkaSxCFXYGtJveY24Fhq5BfO1O3wPuUXvpJN2bsi3liNW1ufqI+eP09dp2Hsr+l7uUcwViO4Q5e4e/pl0Ro+C5doBhEUcwaIwMrzSF/YoMw+wHhwG+X4ae6GeIkL2oCfMjBN32XCyuU6GXScaDNoaGaqm7orUq27joX+Ov3LAZakGBsW+7u0C3WBgqEVqcaTRrKlPTIKTrbeyOPwLJMGlryzoxIxwNpxjkK8iIX3fNtA2uvE5zprcsU3/l27catsc775bGMLXZT2UvHFQqZ8VEEnIP3Gtqh1Y1maP7gqaQTioKnx+2AVrRFDeHuN/JAOnbR1v0HKyyn87ia/mccWOphzbCG2PyLNW2UEWhE0EyZ8kUH0kyp35DmskQiwoOePtCenml0NB4dOehsZoUG+n7BcaA2FfPPKc2Wds5ddIuga4IP33it3f/CPZe6yFca/+sXYca+WIbyrEIRPckM26dboY4dcSNMzydF50kG+6b/Uc6VEaqAd3jFimkiTCWyx6zN+SpM6M9wAXQR29frXpYdDuVpaHxUP+K2T1I315qTfvmndHpUNaL6LUW1TBahn0J7hA/FTNjOIkkpdwinqfxSLsY5myikdEtKd5QXOstq+aZPkTzoSpo59b5WRCS1+x0TbVzpALwdknBGXVlMroGO1Jtfg2UP0gekWd60w2dzj5Bxh5GX7f25QNZ3KsWl7htKpv70rX+1fjgmZnAKrU67pEhdf/RMaRCj/yPzcpus+s2p5t29SL5bDQvDMMcoUSlVixle3A3QXWeeQFQFzNkZvcWvn7g77g6DHte2mX0WZzuENnUbyqvwhcbUN9E04i/zINfyBc4KSLPmjEQQI+rjt722nMZbQh9J2NlxqWZ6ufcavAROX75DXyilkg2VkAIVTyzpfPb3h8xgl3FNznPRfRZ6cvfB0efqZS+Ujziw/f+5RlmSy7HjN5T8b5YDNu27uXVDeurHcuqJm6swp9Zc6pKxz6t/jhDc5ptR7czYI++53/qa88MKV8igTZevEMfGD61fLLrroLissPgvXWPTnsnpoC/rQqX4Oxf9vwM4usz0uZLjLUocJPUrl+F9/8tPyOp/6nr30LIKJz390lgMa1QuPbH83ARzSIPusyXQjyhrfgGc0zjGD0oJB2uMVvVVzZ21SnjyclTOz0+V9eGLjS18uv/yVF8pr3/iT8qUrX8Viq2UcHGy+OdqHCRHiKwxQWsxjGXcdtu+e0qLyrclAzYynG9WUolrV7SE5GxSlnQIQzs/BCZplfsW/TFkVFuLSsWXoKhZSo9CXzjBqObppovxDkYmunUkh4dcGr8tdtpMIKpzPCI0axIvvS1x9Z3aHM0sHiqkKReu4xiVh9YTWHjKG6f6QT0Ym79k6QLrpU9oTb0bArGJRzAYN2tpOPlhNFNjNWS7TCT8maVRjgez5n4DhJYoyVW28LdDdEn6UF3l0Z7ru+kkyptayopC3MytY3GDpc7k2v9KZCYYo/NUCZIDI2n4tCXGNnjHRhN9Pm+8VpNK0LDu8kwjC/R+4CiP6jke/gxPQdUigbKtYJ/J5UGEvjsQLSb/yHScHK/DyqZWwMb74n0OwXeKG0Td3yuTixQxaJtEFRcPTea6n788KCaz/BtiT9MujWl5DvdWFv16YAX30ORX0mpRB0BGKX78sREUhg0HrHA/Kw8Q9vNK9fO/hUiQF43jzpOpa3j5P0h1g0w3hloB3yuNyPtNOMTrktJmPwL7d08sb/DzZ1H6f9MiN5qTjBB83unp8fwpztM+SAmTWhK+GLscaQCVEapBF9cmDgfXwHPR8kaP6WLMa2aQMoz7vcknOBRR1L5Hr5dlq69SVay473MbocRr5ffosBhbqvVvbhE/7+TS7Vh8hwddReaqC22OI7I6E49CqSNTI+Insyo55CB250dLNkGn7fE4/dq03yRbwvnzj8YcuS7RGldv8obi8+XXBDFE2j1jyMnFzm7DtF9yNtoQJ6kREyyHK2IzP8esXL5TVC0/mAqG544ZjF5/W77z9Tjm8ts1JmseepskyBBraLw0gHcplPkMZQIlyMWcsm7AOfQ9L4oSlL+spJ8ctAqc+IkOpwCl3vLnWvs6fwRmiG/JoMf095U1Yen0rawWyzpZwYE5bgpFE3d+fDe3wEO8E+teok33W/HrTrmO0RxnPVSTpD00qRd74hWcVEmDHDMn3KNCabbIkMLjNT9dpiL8GUJcVfgnT+k/rYlHiW31gVqDqlOjKSHlBbqhlq+iI4YvcBhcA7fI1KQdSUNfygIqn5dDoEr42kLzhooh82CZudlSXhXR6EmiGzTkxcV8dhUlITl6h38lzKqq5U0U/9ShtOstdfzXrBLY/MQIqC3GinD12gYu6djiEgSMCWfPtHHUFQ+KEC91UrxfUb/1aQ57U9wFfvA5ZBOZXnA3qJhd1qfjyL3UHTuWYy1vs54TWfuQSFn5o9bzTZ4CJMcp+kTDXntf16O4JPHaJDOmz5p1wNamVNYx1G9JBPEre5rVb5crv/1750SvfL49iaPgcfDTH8HB4yH0Rcy7wurtLXsgujKYuf5nyNX7GxMQNVl5Yp861YN+hhlzsOp70iJK+zoSAiQx63Xe++73yta/9QepJWeeX/V1OdTnRVqnJT+lP48n7sf8P/tfLt8Twt+gAAAAASUVORK5CYII=</span></span></code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">201</span><span class="tab-button">422</span><span class="tab-button">413</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"08279320-dfc9-11e5-a450-0002a5d5c51b"</span></span>,
    "<span class="hljs-attribute">mime</span>": <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>,
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"image"</span></span>,
    "<span class="hljs-attribute">path</span>": <span class="hljs-value"><span class="hljs-string">"12342bh3y3bn3i4i5ii5b43o3n.jpg"</span></span>,
    "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">full</span>": <span class="hljs-value"><span class="hljs-string">"https://laravelapi.test/api/assets/0c244c51-0a3b-4b86-829a-ee161c2f966f/render"</span></span>,
      "<span class="hljs-attribute">thumb</span>": <span class="hljs-value"><span class="hljs-string">"https://laravelapi.test/api/assets/0c244c51-0a3b-4b86-829a-ee161c2f966f/render?width=200&amp;height=200"</span>
    </span>}</span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1997-07-16T19:20:30+01:00"</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The asset ID"</span>
        </span>}</span>,
        "<span class="hljs-attribute">mime</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The asset mime type"</span>
        </span>}</span>,
        "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The asset type"</span>
        </span>}</span>,
        "<span class="hljs-attribute">path</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The asset path in the storage"</span>
        </span>}</span>,
        "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
          "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">full</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
              "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The asset link for render full size"</span>
            </span>}</span>,
            "<span class="hljs-attribute">thumb</span>": <span class="hljs-value">{
              "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
              "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The asset link for render thumb size"</span>
            </span>}
          </span>}
        </span>}</span>,
        "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Date in format iso 8601"</span>
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Validation error"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">413</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The body is too large"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="assets-api-images-post" class="action post"><h4 class="action-heading"><div class="name">Upload a file</div><a href="#assets-api-images-post" class="method post">POST</a><code class="uri">/api/assets</code></h4><p>Using this method you can make a request to the endpoint and include the following headers:</p>
<ul>
<li>
<p>Content-Type: image/jpeg : In this case you can send in the body of the request the raw image data and the API will process it and save it with the correct mime type.</p>
</li>
<li>
<p>Content-Length: 1257652 : In this header you will send the body size in bytes, that way the api will be able to determinate if the request is too large.</p>
</li>
</ul>
<p>In the body of the requests you can send the raw binary data in base 64 encoded of the image.</p>
</div></div><hr class="split"><div class="middle"><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 30 Aug 2021</p></div></div></div></div><script>/* eslint-env browser */
/* eslint quotes: [2, "single"] */
'use strict';

/*
  Determine if a string ends with another string.
*/
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

/*
  Get a list of direct child elements by class name.
*/
function childrenByClass(element, name) {
  var filtered = [];

  for (var i = 0; i < element.children.length; i++) {
    var child = element.children[i];
    var classNames = child.className.split(' ');
    if (classNames.indexOf(name) !== -1) {
      filtered.push(child);
    }
  }

  return filtered;
}

/*
  Get an array [width, height] of the window.
*/
function getWindowDimensions() {
  var w = window,
      d = document,
      e = d.documentElement,
      g = d.body,
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;

  return [x, y];
}

/*
  Collapse or show a request/response example.
*/
function toggleCollapseButton(event) {
    var button = event.target.parentNode;
    var content = button.parentNode.nextSibling;
    var inner = content.children[0];

    if (button.className.indexOf('collapse-button') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        // Currently showing, so let's hide it
        button.className = 'collapse-button';
        content.style.maxHeight = '0px';
    } else {
        // Currently hidden, so let's show it
        button.className = 'collapse-button show';
        content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

function toggleTabButton(event) {
    var i, index;
    var button = event.target;

    // Get index of the current button.
    var buttons = childrenByClass(button.parentNode, 'tab-button');
    for (i = 0; i < buttons.length; i++) {
        if (buttons[i] === button) {
            index = i;
            button.className = 'tab-button active';
        } else {
            buttons[i].className = 'tab-button';
        }
    }

    // Hide other tabs and show this one.
    var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
    for (i = 0; i < tabs.length; i++) {
        if (i === index) {
            tabs[i].style.display = 'block';
        } else {
            tabs[i].style.display = 'none';
        }
    }
}

/*
  Collapse or show a navigation menu. It will not be hidden unless it
  is currently selected or `force` has been passed.
*/
function toggleCollapseNav(event, force) {
    var heading = event.target.parentNode;
    var content = heading.nextSibling;
    var inner = content.children[0];

    if (heading.className.indexOf('heading') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      // Currently showing, so let's hide it, but only if this nav item
      // is already selected. This prevents newly selected items from
      // collapsing in an annoying fashion.
      if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
        content.style.maxHeight = '0px';
      }
    } else {
      // Currently hidden, so let's show it
      content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

/*
  Refresh the page after a live update from the server. This only
  works in live preview mode (using the `--server` parameter).
*/
function refresh(body) {
    document.querySelector('body').className = 'preload';
    document.body.innerHTML = body;

    // Re-initialize the page
    init();
    autoCollapse();

    document.querySelector('body').className = '';
}

/*
  Determine which navigation items should be auto-collapsed to show as many
  as possible on the screen, based on the current window height. This also
  collapses them.
*/
function autoCollapse() {
  var windowHeight = getWindowDimensions()[1];
  var itemsHeight = 64; /* Account for some padding */
  var itemsArray = Array.prototype.slice.call(
    document.querySelectorAll('nav .resource-group .heading'));

  // Get the total height of the navigation items
  itemsArray.forEach(function (item) {
    itemsHeight += item.parentNode.offsetHeight;
  });

  // Should we auto-collapse any nav items? Try to find the smallest item
  // that can be collapsed to show all items on the screen. If not possible,
  // then collapse the largest item and do it again. First, sort the items
  // by height from smallest to largest.
  var sortedItems = itemsArray.sort(function (a, b) {
    return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
  });

  while (sortedItems.length && itemsHeight > windowHeight) {
    for (var i = 0; i < sortedItems.length; i++) {
      // Will collapsing this item help?
      var itemHeight = sortedItems[i].nextSibling.offsetHeight;
      if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
        // It will, so let's collapse it, remove its content height from
        // our total and then remove it from our list of candidates
        // that can be collapsed.
        itemsHeight -= itemHeight;
        toggleCollapseNav({target: sortedItems[i].children[0]}, true);
        sortedItems.splice(i, 1);
        break;
      }
    }
  }
}

/*
  Initialize the interactive functionality of the page.
*/
function init() {
    var i, j;

    // Make collapse buttons clickable
    var buttons = document.querySelectorAll('.collapse-button');
    for (i = 0; i < buttons.length; i++) {
        buttons[i].onclick = toggleCollapseButton;

        // Show by default? Then toggle now.
        if (buttons[i].className.indexOf('show') !== -1) {
            toggleCollapseButton({target: buttons[i].children[0]});
        }
    }

    var responseCodes = document.querySelectorAll('.example-names');
    for (i = 0; i < responseCodes.length; i++) {
        var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
        for (j = 0; j < tabButtons.length; j++) {
            tabButtons[j].onclick = toggleTabButton;

            // Show by default?
            if (j === 0) {
                toggleTabButton({target: tabButtons[j]});
            }
        }
    }

    // Make nav items clickable to collapse/expand their content.
    var navItems = document.querySelectorAll('nav .resource-group .heading');
    for (i = 0; i < navItems.length; i++) {
        navItems[i].onclick = toggleCollapseNav;

        // Show all by default
        toggleCollapseNav({target: navItems[i].children[0]});
    }
}

// Initial call to set up buttons
init();

window.onload = function () {
    autoCollapse();
    // Remove the `preload` class to enable animations
    document.querySelector('body').className = '';
};
</script></body></html>