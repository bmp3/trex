(window.vcvWebpackJsonp4x=window.vcvWebpackJsonp4x||[]).push([[1],{"./node_modules/raw-loader/index.js!./row/cssMixins/columnGap.pcss":function(e,n){e.exports=".vce-row {\n  &--gap-$selector {\n    @if $gap != false {\n      > .vce-row-content {\n        > .vce-col {\n          padding-left: calc($(columnGap)px / 2);\n          padding-right: calc($(columnGap)px / 2);\n        }\n      }\n\n      margin-left: calc(-$(columnGap)px / 2 - 15px);\n      margin-right: calc(-$(columnGap)px / 2 - 15px);\n\n      &.vce-element--has-background {\n        margin-left: calc(-$(columnGap)px / 2);\n        margin-right: calc(-$(columnGap)px / 2);\n      }\n    }\n  }\n}\n\n\n"},"./node_modules/raw-loader/index.js!./row/styles.css":function(e,n){e.exports='/* ----------------------------------------------\n * Row\n * ---------------------------------------------- */\n.vce {\n  margin-bottom: 30px;\n}\n.vce-row {\n  position: relative;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n  margin-left: 0;\n  margin-right: 0;\n}\n.vce-row-content > .vce-col:last-child {\n  margin-right: 0;\n}\n.vce-row-full-height {\n  min-height: 100vh;\n}\n.vce-row-content {\n  -webkit-box-flex: 1;\n      -ms-flex: 1 1 auto;\n          flex: 1 1 auto;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: row;\n          flex-direction: row;\n  -ms-flex-wrap: wrap;\n      flex-wrap: wrap;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  -ms-flex-line-pack: start;\n      align-content: flex-start;\n  -webkit-box-align: start;\n      -ms-flex-align: start;\n          align-items: flex-start;\n  min-height: 1em;\n  position: relative;\n}\n.vce-row-wrap--reverse > .vce-row-content {\n  -ms-flex-wrap: wrap-reverse;\n      flex-wrap: wrap-reverse;\n  -ms-flex-line-pack: end;\n      align-content: flex-end;\n  -webkit-box-align: end;\n      -ms-flex-align: end;\n          align-items: flex-end;\n}\n.vce-row-columns--top > .vce-row-content {\n  -ms-flex-line-pack: start;\n      align-content: flex-start;\n}\n.vce-row-columns--top.vce-row-wrap--reverse > .vce-row-content {\n  -ms-flex-line-pack: end;\n      align-content: flex-end;\n}\n.vce-row-columns--middle > .vce-row-content {\n  -ms-flex-line-pack: center;\n      align-content: center;\n}\n.vce-row-columns--bottom > .vce-row-content {\n  -ms-flex-line-pack: end;\n      align-content: flex-end;\n}\n.vce-row-columns--bottom.vce-row-wrap--reverse > .vce-row-content {\n  -ms-flex-line-pack: start;\n      align-content: flex-start;\n}\n.vce-row-columns--top > .vce-row-content:after,\n.vce-row-columns--middle > .vce-row-content:after,\n.vce-row-columns--bottom > .vce-row-content:after {\n  content: "";\n  width: 100%;\n  height: 0;\n  overflow: hidden;\n  visibility: hidden;\n  display: block;\n}\n.vce-row-content--middle > .vce-row-content > .vce-col > .vce-col-inner {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n}\n.vce-row-content--bottom > .vce-row-content > .vce-col > .vce-col-inner {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n}\n.vce-row-equal-height > .vce-row-content {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n}\n.vce-row-columns--stretch > .vce-row-content {\n  -ms-flex-line-pack: stretch;\n      align-content: stretch;\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n}\n.vce-row[data-vce-full-width="true"] {\n  position: relative;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n}\n.vce-row[data-vce-stretch-content="true"] {\n  padding-left: 30px;\n  padding-right: 30px;\n}\n.vce-row[data-vce-stretch-content="true"].vce-row-no-paddings {\n  padding-left: 0;\n  padding-right: 0;\n}\n.vce-row.vce-element--has-background {\n  padding-left: 30px;\n  padding-right: 30px;\n  padding-top: 30px;\n}\n.vce-row.vce-element--has-background[data-vce-full-width="true"]:not([data-vce-stretch-content="true"]) {\n  padding-left: 0;\n  padding-right: 0;\n}\n.vce-row.vce-element--has-background.vce-row--has-col-background {\n  padding-bottom: 30px;\n}\n.vce-row > .vce-row-content > .vce-col.vce-col--all-last {\n  margin-right: 0;\n}\n.rtl .vce-row > .vce-row-content > .vce-col.vce-col--all-last,\n.rtl.vce-row > .vce-row-content > .vce-col.vce-col--all-last {\n  margin-left: 0;\n}\n@media (min-width: 0) and (max-width: 543px) {\n  .vce-row.vce-element--xs--has-background {\n    padding-left: 30px;\n    padding-right: 30px;\n    padding-top: 30px;\n  }\n  .vce-row.vce-element--xs--has-background[data-vce-full-width="true"]:not([data-vce-stretch-content="true"]) {\n    padding-left: 0;\n    padding-right: 0;\n  }\n  .vce-row.vce-element--xs--has-background.vce-row--xs--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--xs--has-background.vce-row--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--has-background.vce-row--xs--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row > .vce-row-content > .vce-col.vce-col--xs-last {\n    margin-right: 0;\n  }\n  .rtl .vce-row > .vce-row-content > .vce-col.vce-col--xs-last,\n  .rtl.vce-row > .vce-row-content > .vce-col.vce-col--xs-last {\n    margin-left: 0;\n  }\n}\n/* styles for mobile-landscape */\n@media (min-width: 544px) and (max-width: 767px) {\n  .vce-row.vce-element--sm--has-background {\n    padding-left: 30px;\n    padding-right: 30px;\n    padding-top: 30px;\n  }\n  .vce-row.vce-element--sm--has-background[data-vce-full-width="true"]:not([data-vce-stretch-content="true"]) {\n    padding-left: 0;\n    padding-right: 0;\n  }\n  .vce-row.vce-element--sm--has-background.vce-row--sm--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--sm--has-background.vce-row--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--has-background.vce-row--sm--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row > .vce-row-content > .vce-col.vce-col--sm-last {\n    margin-right: 0;\n  }\n  .rtl .vce-row > .vce-row-content > .vce-col.vce-col--sm-last,\n  .rtl.vce-row > .vce-row-content > .vce-col.vce-col--sm-last {\n    margin-left: 0;\n  }\n}\n/* styles for mobile-landscape */\n@media (min-width: 768px) and (max-width: 991px) {\n  .vce-row.vce-element--md--has-background {\n    padding-left: 30px;\n    padding-right: 30px;\n    padding-top: 30px;\n  }\n  .vce-row.vce-element--md--has-background[data-vce-full-width="true"]:not([data-vce-stretch-content="true"]) {\n    padding-left: 0;\n    padding-right: 0;\n  }\n  .vce-row.vce-element--md--has-background.vce-row--md--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--md--has-background.vce-row--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--has-background.vce-row--md--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row > .vce-row-content > .vce-col.vce-col--md-last {\n    margin-right: 0;\n  }\n  .rtl .vce-row > .vce-row-content > .vce-col.vce-col--md-last,\n  .rtl.vce-row > .vce-row-content > .vce-col.vce-col--md-last {\n    margin-left: 0;\n  }\n}\n/* styles for mobile-landscape */\n@media (min-width: 992px) and (max-width: 1199px) {\n  .vce-row.vce-element--lg--has-background {\n    padding-left: 30px;\n    padding-right: 30px;\n    padding-top: 30px;\n  }\n  .vce-row.vce-element--lg--has-background[data-vce-full-width="true"]:not([data-vce-stretch-content="true"]) {\n    padding-left: 0;\n    padding-right: 0;\n  }\n  .vce-row.vce-element--lg--has-background.vce-row--lg--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--lg--has-background.vce-row--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--has-background.vce-row--lg--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row > .vce-row-content > .vce-col.vce-col--lg-last {\n    margin-right: 0;\n  }\n  .rtl .vce-row > .vce-row-content > .vce-col.vce-col--lg-last,\n  .rtl.vce-row > .vce-row-content > .vce-col.vce-col--lg-last {\n    margin-left: 0;\n  }\n}\n/* styles for mobile-landscape */\n@media (min-width: 1200px) {\n  .vce-row.vce-element--xl--has-background {\n    padding-left: 30px;\n    padding-right: 30px;\n    padding-top: 30px;\n  }\n  .vce-row.vce-element--xl--has-background[data-vce-full-width="true"]:not([data-vce-stretch-content="true"]) {\n    padding-left: 0;\n    padding-right: 0;\n  }\n  .vce-row.vce-element--xl--has-background.vce-row--xl--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--xl--has-background.vce-row--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row.vce-element--has-background.vce-row--xl--has-col-background {\n    padding-bottom: 30px;\n  }\n  .vce-row > .vce-row-content > .vce-col.vce-col--xl-last {\n    margin-right: 0;\n  }\n  .rtl .vce-row > .vce-row-content > .vce-col.vce-col--xl-last,\n  .rtl.vce-row > .vce-row-content > .vce-col.vce-col--xl-last {\n    margin-left: 0;\n  }\n}\n'},"./row/component.js":function(e,n,t){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var o=d(t("./node_modules/babel-runtime/helpers/extends.js")),c=d(t("./node_modules/babel-runtime/core-js/object/get-prototype-of.js")),l=d(t("./node_modules/babel-runtime/helpers/classCallCheck.js")),a=d(t("./node_modules/babel-runtime/helpers/createClass.js")),i=d(t("./node_modules/babel-runtime/helpers/possibleConstructorReturn.js")),r=d(t("./node_modules/babel-runtime/helpers/inherits.js")),s=d(t("./node_modules/react/index.js"));function d(e){return e&&e.__esModule?e:{default:e}}var v=function(e){function n(){return(0,l.default)(this,n),(0,i.default)(this,(n.__proto__||(0,c.default)(n)).apply(this,arguments))}return(0,r.default)(n,e),(0,a.default)(n,[{key:"render",value:function(){var e=t("./node_modules/classnames/index.js"),n=this.props,c=n.id,l=n.atts,a=n.editor,i=n.isBackend,r=l.customClass,d=l.rowWidth,v=l.removeSpaces,p=l.columnGap,u=l.fullHeight,m=l.metaCustomId,g=l.equalHeight,w=l.columnPosition,b=l.contentPosition,h=l.designOptionsAdvanced,x=l.layout,f=l.columnBackground,k=l.hidden,y=this.props.children,C=window.VCV_EDITOR_TYPE?window.VCV_EDITOR_TYPE():"default",j=e({"vce-row-container":!0,"vce-wpbackend-element-hidden":k&&i}),_=["vce-row"];if(f)if(f.all)_.push("vce-row--has-col-background");else for(var R in f)f[R]&&_.push("vce-row--"+R+"--has-col-background");_.push(this.getBackgroundClass(h)),_.push("vce-row--col-gap-"+(p?parseInt(p):0)),x&&x.reverseColumn&&!x.disableStacking&&_.push("vce-row-wrap--reverse");var G={style:{}},E={style:{}},D={};"string"==typeof r&&r&&_.push(r),"stretchedRow"===d||"stretchedRowAndColumn"===d?E["data-vce-full-width"]=!0:(E.style.width="",E.style.left="",E.style.right="",G.style.paddingLeft="",G.style.paddingRight=""),"stretchedRowAndColumn"!==d&&"sidebar"!==C||(E["data-vce-stretch-content"]=!0),"sidebar"!==C&&"stretchedRowAndColumn"!==d||!v||_.push("vce-row-no-paddings"),u?_.push("vce-row-full-height"):E.style.minHeight="",g&&"stretch"!==w&&_.push("vce-row-equal-height"),w&&_.push("vce-row-columns--"+w),b&&_.push("vce-row-content--"+b);var P=e(_);m&&(D.id=m),G["data-vce-element-content"]=!0;var A=this.applyDO("all");return s.default.createElement("div",(0,o.default)({className:j},D),s.default.createElement("div",(0,o.default)({className:P},E,a,{id:"el-"+c},A),this.getBackgroundTypeContent(),this.getContainerDivider(),s.default.createElement("div",(0,o.default)({className:"vce-row-content"},G),y)))}}]),n}(d(t("./node_modules/vc-cake/index.js")).default.getService("api").elementComponent);n.default=v},"./row/index.js":function(e,n,t){"use strict";var o=l(t("./node_modules/vc-cake/index.js")),c=l(t("./row/component.js"));function l(e){return e&&e.__esModule?e:{default:e}}(0,o.default.getService("cook").add)(t("./row/settings.json"),function(e){e.add(c.default)},{css:t("./node_modules/raw-loader/index.js!./row/styles.css"),editorCss:!1,mixins:{columnGap:{mixin:t("./node_modules/raw-loader/index.js!./row/cssMixins/columnGap.pcss")}}},"")},"./row/settings.json":function(e){e.exports={customClass:{type:"string",access:"public",value:"",options:{label:"Extra class name",description:"Add an extra class name to the element and refer to it from Custom CSS option."}},layout:{type:"rowLayout",access:"public",value:{},options:{label:"Row Layout"}},dividers:{type:"divider",access:"public",value:{},options:{label:"Dividers"}},designOptionsAdvanced:{type:"designOptionsAdvanced",access:"public",value:{},options:{label:"Design Options"}},editFormTab1:{type:"group",access:"protected",value:["rowWidth","removeSpaces","columnGap","fullHeight","columnPosition","equalHeight","contentPosition","metaCustomId","customClass"],options:{label:"General"}},metaEditFormTabs:{type:"group",access:"protected",value:["editFormTab1","layout","designOptionsAdvanced","dividers"]},relatedTo:{type:"group",access:"protected",value:["General","RootElements","Row"]},containerFor:{type:"group",access:"protected",value:["Column"]},parentWrapper:{type:"string",access:"protected",value:""},metaOrder:{type:"number",access:"protected",value:2},rowWidth:{type:"buttonGroup",access:"public",value:"boxed",options:{label:"Row width",values:[{label:"Boxed",value:"boxed",icon:"vcv-ui-icon-attribute-row-width-boxed"},{label:"Stretched Row",value:"stretchedRow",icon:"vcv-ui-icon-attribute-row-width-stretched"},{label:"Stretched Row and Column",value:"stretchedRowAndColumn",icon:"vcv-ui-icon-attribute-row-width-stretched-content"}],containerDependency:{sidebar:"hide"}}},removeSpaces:{type:"toggle",access:"public",value:!1,options:{label:"Remove spaces",description:"Remove row spaces from left and right.",onChange:{rules:{rowWidth:{rule:"value",options:{value:"stretchedRowAndColumn"}}},actions:[{action:"toggleVisibility"}]},containerDependency:{sidebar:"removeDependencies"}}},columnGap:{type:"number",access:"public",value:"30",options:{label:"Column gap",description:"Enter gap between columns in pixels (Example: 5).",min:"0"}},fullHeight:{type:"toggle",access:"public",value:!1,options:{label:"Full height",description:"Set row to be full screen height."}},metaCustomId:{type:"customId",access:"public",value:"",options:{label:"Element ID",description:"Apply unique ID to element to link directly to it by using #your_id (for element ID use lowercase input only)."}},equalHeight:{type:"toggle",access:"public",value:!1,options:{label:"Column equal height"}},columnPosition:{type:"buttonGroup",access:"public",value:"top",options:{label:"Column position",values:[{label:"Top",value:"top",icon:"vcv-ui-icon-attribute-vertical-alignment-top"},{label:"Middle",value:"middle",icon:"vcv-ui-icon-attribute-vertical-alignment-middle"},{label:"Bottom",value:"bottom",icon:"vcv-ui-icon-attribute-vertical-alignment-bottom"},{label:"Full Height",value:"stretch",icon:"vcv-ui-icon-attribute-vertical-alignment-full-height"}],onChange:{rules:{fullHeight:{rule:"toggle"}},actions:[{action:"toggleVisibility"}]}}},contentPosition:{type:"buttonGroup",access:"public",value:"top",options:{label:"Content position",values:[{label:"Top",value:"top",icon:"vcv-ui-icon-attribute-vertical-alignment-top"},{label:"Middle",value:"middle",icon:"vcv-ui-icon-attribute-vertical-alignment-middle"},{label:"Bottom",value:"bottom",icon:"vcv-ui-icon-attribute-vertical-alignment-bottom"}]}},backendView:{type:"string",access:"protected",value:"frontend"},size:{type:"string",access:"public",value:"auto"},hidden:{type:"string",access:"public",value:!1},columnBackground:{type:"string",access:"public",value:""},tag:{access:"protected",type:"string",value:"row"},metaPublicJs:{access:"protected",type:"string",value:{libraries:[{rules:{fullHeight:{rule:"toggle"}},libPaths:"public/dist/fullHeightRow.min.js"},{rules:{rowWidth:{rule:"!value",options:{value:"boxed"}}},libPaths:"public/dist/fullWidthRow.min.js"}]}},initChildren:{access:"protected",type:"object",value:[{tag:"column"}]}}}},[["./row/index.js"]]]);