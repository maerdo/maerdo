[form]
elementFilters.trim = "StringTrim"

; Form Decorators
disableLoadDefaultDecorators = true
decorators.formElements.decorator = "FormElements"
decorators.description.decorator = "Description" 

decorators.div.decorator = "HtmlTag"
decorators.div.options.tag = "div"
decorators.div.options.class = "forms"

decorators.form.decorator = "Form"

; Add the following element decorators to the add form
elementDecorators.description.decorator = "Description"
elementDecorators.viewhelper.decorator= "ViewHelper"
elementDecorators.error.decorator = "Errors"


; Add a data tag to each data field
elementDecorators.datatag.type.datatag = "HtmlTag"
elementDecorators.datatag.options.tag = "div"
elementDecorators.datatag.options.class = "inputs"


; Add a decorator to each element labelled as a label
elementDecorators.label.decorator = "Label"

; Add a tag to the end of a what it things is a row.
elementDecorators.rowtag.type.rowtag = "HtmlTag"
elementDecorators.rowtag.options.tag = "div"
elementDecorators.rowtag.options.class = "row"