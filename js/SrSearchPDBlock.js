document.addEventListener("DOMContentLoaded", function () {
    class BaseSearch {
        constructor({parent_el, texts}) {
            this.parent_el = parent_el;
            this.texts = texts;
        }

        init() {

        }

        initField() {
            const field = document.createElement("input");

            field.classList.add("form-control");

            field.placeholder = this.texts.placeholder;

            field.type = "search";

            return field;
        }
    }

    class CurrentPageSearch extends BaseSearch {
        constructor({operator, parent_el, texts: {placeholder}}) {
            super({parent_el, texts: {placeholder}});
            this.operator = operator;
        }

        init() {
            const field = this.initField();
            field.addEventListener("input", this.onInput.bind(this, field));

            this.parent_el.appendChild(field);
        }

        onInput(field) {
            const searchWords = this.parseWords(field.value);

            document.querySelectorAll(".ilContainerBlockHeader, .ilPDBlockSubHeader, .ilContainerListItemCB, .ilContainerListFooter, .ilToolbar, .ilNewObjectSelector").forEach(function (el) {
                el.style.display = searchWords.length > 0 ? "none" : "";
            });

            document.querySelectorAll(".ilObjListRow, .il-card, .tile, .il-item").forEach(this.testObject.bind(this, searchWords));
        }

        parseWords(text) {
            return text.toLowerCase().split(/\s/).map(function (word) {
                return word.trim();
            }).filter(function (word) {
                return (word.length > 0);
            });
        }

        testObject(searchWords, el) {
            el.style.display = ""; // Show it before because `innerText` seems to be buggy if hidden

            const textWords = this.parseWords(el.innerText);

            let match;

            if (searchWords.length > 0) {
                switch (this.operator) {
                    case 1:
                        match = this.testObjectAND(searchWords, textWords);
                        break;

                    case 2:
                        match = this.testObjectOR(searchWords, textWords);
                        break;

                    default:
                        match = true;
                        break;
                }
            } else {
                match = true;
            }

            el.style.display = match ? "" : "none";
        }

        testObjectAND(searchWords, textWords) {
            return searchWords.every(function (searchWord) {
                return textWords.some(function (textWord) {
                    return (textWord.indexOf(searchWord) !== -1);
                });
            });
        }

        testObjectOR(searchWords, textWords) {
            return searchWords.some(function (searchWord) {
                return textWords.some(function (textWord) {
                    return (textWord.indexOf(searchWord) !== -1);
                });
            });
        }
    }

    class GlobalSearch extends BaseSearch {
        constructor({action, method, name, parent_el, texts: {go, placeholder}}) {
            super({parent_el, texts: {go, placeholder}});
            this.action = action;
            this.method = method;
            this.name = name;
        }

        init() {
            const form = document.createElement("form");
            form.action = this.action;
            form.method = this.method;

            const field = this.initField();
            field.name = this.name;
            form.appendChild(field);

            const button = document.createElement("button");
            button.classList.add("btn", "btn-default");
            button.innerText = this.texts.go;
            button.type = "submit";
            form.appendChild(button);

            this.parent_el.appendChild(form);
        }
    }

    document.querySelectorAll(".SrSearchPDBlockEverywhere").forEach(function (el) {
        el.remove();
        document.querySelector(".il-maincontrols-metabar, #ilTopBarNav").appendChild(el);
    });

    document.querySelectorAll(".SrSearchPDBlock").forEach(function (el) {
        const config = JSON.parse(atob(el.dataset.config));

        config.parent_el = el;

        let search = null;

        switch (config.type) {
            case "current_page_search":
                search = new CurrentPageSearch(config);
                break;

            case "global_search":
                search = new GlobalSearch(config);
                break;

            default:
                break;
        }

        if (search) {
            search.init();
        }
    });
});
