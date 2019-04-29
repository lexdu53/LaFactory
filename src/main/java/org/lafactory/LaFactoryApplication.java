package org.lafactory;

import org.lafactory.dao.UsersRepository;
import org.lafactory.entities.Users;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.ApplicationContext;

@SpringBootApplication
public class LaFactoryApplication implements CommandLineRunner{
	@Autowired
	private UsersRepository usersRepository;
	public static void main(String[] args) {
		SpringApplication.run(LaFactoryApplication.class, args);
				
	}
	@Override
	public void run(String... args) throws Exception {
		usersRepository.save(new Users("RIDE", "Arnaud", "admin", "admin"));
	}
	
}
