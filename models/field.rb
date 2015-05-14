class Field

	attr_accessor :id, :type, :name, :value

	def initialize(type, name)
		@type, @name = type, name
	end

end