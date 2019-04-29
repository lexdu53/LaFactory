package org.lafactory.web;

import org.lafactory.Service.IOrigamiService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class OrigamiController {
	@Autowired
	private IOrigamiService origamiService;
	
	@RequestMapping("/login")
	public String index(Model model) {
		model.addAttribute("message", "Oh Yeah");
		return "login";
	}

	
	@RequestMapping("/admin/index")
	public String admin() {
		return "admin/index";
	}

}
