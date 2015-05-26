class Document
  include Mongoid::Document
  field :name, type: String
  field :description, type: String
  mount_uploader :file_name, DocumentUploader
end
