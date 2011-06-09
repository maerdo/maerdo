[form]

disableLoadDefaultDecorators = true
decorators.formElements.decorator = "FormElements"
decorators.description.decorator = "Description" 

decorators.table.decorator = "HtmlTag"
decorators.table.options.tag = "table"
decorators.table.options.class = "forms"

elementDecorators.helper.decorator     = viewHelper
elementDecorators.errors.decorator     = errors

elementDecorators.data.decorator.data  = htmlTag
elementDecorators.data.options.tag     = td
elementDecorators.data.options.class   = element

elementDecorators.label.decorator      = label
elementDecorators.label.options.tag    = td

elementDecorators.row.decorator.row    = htmlTag
elementDecorators.row.options.tag      = tr 