# Compilers
LESS = node_modules/less/bin/lessc
PHP = php -q

# Optimization flags
LESS_FLAGS = --plugin=less-plugin-clean-css

# The source directory
SRC ?= testing_site
DST ?= demo

# Dependent files
INCLUDES = $(shell ls $(SRC)/assets/*)

# Output files
OUTPUTS = $(DST)/index.html $(DST)/internal.html $(DST)/css/styles.css


# Functions
define build_html
	cp -r $(SRC)/img $(DST)
	cp -r $(SRC)/js $(DST)
	cp -r $(SRC)/fonts $(DST)
	cp $(SRC)/*.png $(DST)
	$(PHP) $< | sed 's/\.php/.html/g' > $@
endef

define build_css
	mkdir -p $(DST)/css
	cp -r $(SRC)/css/* $(DST)/css
	$(LESS) $(LESS_FLAGS) $< $@
endef


# Targets

all: $(OUTPUTS)

$(DST)/css/styles.css: $(SRC)/less/styles.less
	$(build_css)

$(DST)/index.html: $(SRC)/index.php $(DST)/css/styles.css $(INCLUDES)
	$(build_html)

$(DST)/internal.html: $(SRC)/internal.php $(DST)/css/styles.css $(INCLUDES)
	$(build_html)
	
	
clean:
	rm -rf $(OUTPUTS) $(DST)/css $(DST)/img