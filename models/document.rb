class Document

	attr_accessor :id, :template, :document
	
	def initialize(template, document)
		@template, @document = template, document
	end

end