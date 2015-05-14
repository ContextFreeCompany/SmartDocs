class Template

	attr_accessor :id, :name, :fields

	def initialize(name = nil, fields = [])
		@name, @fields = name, fields
	end

end