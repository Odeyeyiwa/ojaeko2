$(document).ready(function(){
					$('#malelink').mouseenter(function(){
						$('#male').show(function(){
							$('#fem').hide()
							$('#children').hide()
							$('#foot').hide()
							$('#aso').hide()
							$('#accessories').hide()

						})
					})
					$('#femlink').mouseenter(function(){
						$('#fem').show(function(){
							$('#male').hide()
							$('#children').hide()
							$('#foot').hide()
							$('#aso').hide()
							$('#accessories').hide()

						})
					})
					$('#childlink').mouseenter(function(){
						$('#children').show(function(){
							$('#fem').hide()
							$('#accessories').hide()
							$('#foot').hide()
							$('#aso').hide()
							$('#male').hide()

						})
					})
					$('#footlink').mouseenter(function(){
						$('#foot').show(function(){
							$('#fem').hide()
							$('#children').hide()
							$('#accessories').hide()
							$('#aso').hide()
							$('#male').hide()

						})
					})
					$('#asolink').mouseenter(function(){
						$('#aso').show(function(){
							$('#accessories').hide()
							$('#children').hide()
							$('#foot').hide()
							$('#fem').hide()
							$('#male').hide()

						})
					})
					$('#acclink').mouseenter(function(){
						$('#accessories').show(function(){
							$('#fem').hide()
							$('#children').hide()
							$('#foot').hide()
							$('#aso').hide()
							$('#male').hide()

						})
					})
				})
