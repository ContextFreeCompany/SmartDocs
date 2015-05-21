class Template
  include Mongoid::Document
  field :name, type: String
  field :fields, type: Array
end
